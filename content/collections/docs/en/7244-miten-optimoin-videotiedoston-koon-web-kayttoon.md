---
id: c867ae04-f601-46c1-a4f7-c219b171386d
origin: befa7af3-9466-45a0-993a-83d887cbde2c
blueprint: doc
title: '7.24.4 How do I optimize a video file size for web use?'
---
<p>If you are not using a video service that optimizes videos for you, but want to upload videos directly as files to Builder, it is worth optimizing the video files yourself for web use first. Here are instructions for how to do this using a free open source program called Handbrake.</p>

<p>You can download the program from: <a href="https://handbrake.fr/">https://handbrake.fr/</a></p>

<p><strong>Usage instructions:</strong></p>

<p><strong>File</strong></p>
<ol>
 <li>Launch the program and select the video file using the "Open" button or drag the video file onto the program</li>
 <li>At the bottom, in "Save as", enter the desired name and location for the new file
<ul>
 <li><strong>Note.</strong> Use the .mp4 file extension instead of .m4v</li>
</ul>
</li>
</ol>
<p><strong>Summary tab</strong></p>
<ol>
 <li>Check "<strong>Web optimized</strong>" so that the video file can be loaded to the user in segments</li>
</ol>
<p><strong>Dimensions tab</strong></p>
<ol>
 <li>From the <strong>Resolution Limit</strong> dropdown, select either <strong>1080p</strong> or <strong>720p</strong> (the latter if the video is more than a few minutes long)
<ul>
 <li><strong>Note.</strong> "Width" must be an even number.</li>
</ul>
</li>
 <li>Select "<strong>Quality: Constant Quality</strong>" in the range of 23–30 RF (additional note below*).</li>
 <li>Select "<strong>Framerate: Same as source (variable framerate)</strong>".</li>
</ol>
<p>When everything is ready, press from the top: <strong>Start Encode!</strong></p>

<p>*Note! Quality / file size can be adjusted if desired using the Constant Quality slider in the Video tab:</p>
<ul>
 <li>The numbers are "backwards", meaning 23 is good quality and 30 is poor quality.
<ul>
 <li>Below 20 is unnecessarily high quality for web use and above 30 is already too low quality.</li>
 <li>Even small changes can make a big difference when needed (and logarithmically, meaning the difference between 20–21 is larger than between 29–30),
<ul>
 <li>For a 720p video, the file size difference between 20 and 23 can be 1/3, so it is worth doing a few test runs especially with long videos (if the video cannot be split into several smaller videos; or if you know that the target audience needs a very lightweight video in terms of file size).</li>
</ul>
</li>
</ul>
</li>
</ul>
