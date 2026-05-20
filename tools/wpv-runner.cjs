var fs = require("fs");
var INPUT = "C:/Users/tomih/Downloads/apprixoy.WordPress.2026-04-27.xml";
var OUTPUT = "C:/Users/tomih/Code/apprix-www/tools/wp-video-analysis.txt";
var VIDS = ["328168769","328161499","413462538","413470503"];
var buf="",ibuf="",inItem=false,cnt=0,hits=[];
var ss="[\\s\\S]";
function mkRe(p,f){return new RegExp(p,f);}
function exCDATA(x,t){
  var p1="<"+t+"[^>]*><!\\[CDATA\\[("+ss+"*?)\\]\\]></"+t+">"; 
  var p2="<"+t+"[^>]*>("+ss+"*?)</"+t+">";
  var m=mkRe(p1,"i").exec(x);if(m)return m[1];
  m=mkRe(p2,"i").exec(x);return m?m[1]:null;
}
function check(xml){
  var t=exCDATA(xml,"title")||"";
  var sl=exCDATA(xml,"wp:post_name")||"";
  var pt=exCDATA(xml,"wp:post_type")||"";
  var co=exCDATA(xml,"content:encoded")||"";
  var id=exCDATA(xml,"wp:post_id")||"";
  var st=exCDATA(xml,"wp:status")||"";
  var lp="<link>("+ss+"*?)</link>";
  var lm=mkRe(lp,"i").exec(xml);
  var lk=lm?lm[1]:"";
  var fv=VIDS.filter(function(v){return (co.indexOf(v)+1)||(xml.indexOf(v)+1);});
  var tl=t.toLowerCase();
  var titlem=((tl.indexOf("osion video")+1)||(tl.indexOf("section video")+1)||(tl.indexOf("video")+1)||fv.length)>0;
  var vup="https?://[^\s\\\"<>]+\.(?:mp4|webm|ogv)";
  var vep="https?://(?:www\.)?vimeo\.com/[^\s\\\"<>]+";
  var vu=(co.match(mkRe(vup,"gi"))||[]).slice();
  var ve=(co.match(mkRe(vep,"gi"))||[]).slice();
  if(fv.length||(titlem&&(pt===""||(pt<"attachment")||(pt>"attachment")))){
    return{id:id,t:t,sl:sl,pt:pt,st:st,lk:lk,fv:fv,vu:vu,ve:ve,co:co,tonly:fv.length===0};
  }
  return null;
}
var rd=fs.createReadStream(INPUT,{encoding:"utf8",highWaterMark:1048576});
rd.on("data",function(ch){
  buf+=ch;
  processBuffer();
});
function processBuffer(){
  while(true){
    if(inItem===false){
      var si=buf.indexOf("<item>");
      if(si===-1){buf=buf.slice(-20);return;}
      buf=buf.slice(si);inItem=true;ibuf="";
    }
    var ei=buf.indexOf("</item>");
    if(ei===-1){ibuf+=buf;buf="";return;}
    var full=ibuf+buf.slice(0,ei+7);
    ibuf="";buf=buf.slice(ei+7);inItem=false;cnt++;
    var r=check(full);if(r)hits.push(r);
  }
}
rd.on("end",function(){
  processBuffer();
  var L=[];
  var S80="=".repeat(80);
  var S60="-".repeat(60);
  L.push(S80);
  L.push("WordPress XML Export - Video Analysis");
  L.push("Items processed: "+cnt);
  L.push("Matches: "+hits.length);
  L.push(S80);
  var vm=hits.filter(function(h){return h.fv.length>0;});
  var tm=hits.filter(function(h){return h.tonly;});
  L.push("");
  L.push("## ITEMS MATCHING TARGET VIMEO IDs");
  L.push(S80);
  if(vm.length===0)L.push("(none found)");
  vm.forEach(function(h){
    L.push(S60);
    L.push("POST ID:         "+h.id);
    L.push("TITLE:           "+h.t);
    L.push("SLUG:            "+h.sl);
    L.push("TYPE:            "+h.pt);
    L.push("STATUS:          "+h.st);
    L.push("LINK:            "+h.lk);
    L.push("VIMEO IDs FOUND: "+h.fv.join(", "));
    L.push("VIDEO FILE URLs: "+(h.vu.length?h.vu.join(", "):"(none)"));
    if(h.ve.length)L.push("VIMEO EMBED URLs: "+h.ve.join(", "));
    L.push("");
    L.push("--- FULL CONTENT ---");
    L.push(h.co);
    L.push("--- END ---");
    L.push("");
  });
  L.push("");
  L.push("## TITLE-ONLY MATCHES");
  L.push(S80);
  if(tm.length===0)L.push("(none found)");
  tm.forEach(function(h){
    L.push(S60);
    L.push("POST ID:    "+h.id);
    L.push("TITLE:      "+h.t);
    L.push("SLUG:       "+h.sl);
    L.push("TYPE:       "+h.pt);
    L.push("STATUS:     "+h.st);
    if(h.vu.length)L.push("VIDEO FILE URLs: "+h.vu.join(", "));
    if(h.ve.length)L.push("VIMEO EMBED: "+h.ve.join(", "));
    L.push("--- CONTENT SNIPPET (4000 chars) ---");
    L.push(h.co.slice(0,4000));
    L.push("--- END ---");
    L.push("");
  });
  L.push("");
  L.push("## SUMMARY");
  L.push(S80);
  VIDS.forEach(function(v){
    var f=vm.filter(function(h){return h.fv.indexOf(v)+1;});
    if(f.length){
      L.push("Vimeo "+v+": FOUND in "+f.map(function(h){return h.t+" ("+h.pt+", slug:"+h.sl+")";}).join("; "));
    }else{
      L.push("Vimeo "+v+": NOT FOUND");
    }
  });
  require("fs").writeFileSync(OUTPUT,L.join("\n"),"utf8");
  console.log("Done: "+cnt+" items, "+hits.length+" matches");
  console.log("Output: "+OUTPUT);
  console.log("\n--- CONSOLE SUMMARY ---");
  VIDS.forEach(function(v){
    var f=vm.filter(function(h){return h.fv.indexOf(v)+1;});
    if(f.length)console.log("  Vimeo "+v+": FOUND -> "+f[0].t+" (type:"+f[0].pt+", slug:"+f[0].sl+")");
    else console.log("  Vimeo "+v+": NOT FOUND");
  });
});
rd.on("error",function(e){console.error(e);process.exit(1);});
