---
id: ed584a43-0946-48fd-92db-c397ea7a72ee
blueprint: doc
title: '7.24 Video'
---
You can embed a video directly into the Video element by copying the embed code from a streaming service (e.g., Vimeo, YouTube, Dream Broker).

<strong>NOTE! Builder does not support embedding YouTube playlists; it only embeds individual videos.</strong>

You can include an introduction text to the pop-up window at the beginning of a video, where you can direct the trainee to focus on specific topics. One great way to get people to pay attention to a video is to add a task element after the video and tell the users in the introduction that they will be asked a question about the video topics afterwards.

Keep the videos as short as possible. If a video is longer than 1 to 2 minutes, consider cutting it into two or more parts and adding tasks in between.

<strong>In the upgraded version of the Video element</strong>, the trainee can see the move forward button several seconds after the video has started or at the end of the video. You can define when the move forward button is shown to the trainee.

You can specify a setting to automatically show the move forward button or after a delay. After embedding the video in the Video element, the forward button setting changes as follows:
<ul>
 <li>The forward button automatically appears when a video ends up on supported video playback services such as Youtube and Vimeo, embedded videos, and Builder uploaded videos.</li>
 <li>For other videos, such as Microsoft Stream or DreamBroker, the default setting is to show the button with a default delay of 10 seconds.</li>
</ul>

We recommend our customers upload embedded videos from Vimeo. Apprix has a business account where we can upload our customers’ videos in a way that allows them to be viewed only via a hidden link. For more information, please contact helpdesk@apprix.fi. If your company does not have a Vimeo account and you would like to upload a video to your module, please follow these steps:
<ol>
 <li>Deliver the video(s) to Apprix, preferably in MP4 format.</li>
 <li>We will upload the videos hidden into the Apprix account in Vimeo and the module using the Vimeo embed code.</li>
</ol>
If your company has a Vimeo account, you can submit the video embed code to Apprix or copy it directly into the video element field.

<ol>
 <li>Choose the element <strong>Video</strong> and click to open it.</li>
 <li>Click the screen <strong>Add your video here</strong>. Pop-up window <strong>Change Video/Audio</strong> will appear.</li>
 <li>Choose the <strong>Paste video embed code/iframe</strong> tab.</li>
 <li>Open the video from YouTube and choose the arrow button <strong>Share</strong> underneath it.</li>
 <li>Choose <strong>Embed</strong> option</li>
 <li>Copy the code</li>
</ol>
Choose the <strong>Video</strong> element tab <strong>Paste video embed code/iframe</strong>, if not done before, and paste the embed code.

<strong>Tips for YouTube</strong>

Option <strong>Show player controls </strong>allows users to control video playback, volume, and settings. Untick <strong>Show player controls</strong>, if you do not want to allow users to control video playback, volume, and settings.

<strong>Privacy-Enhanced Mode </strong>is a new option that YouTube added to the embed preferences that improves privacy when embedding videos on third-party sites.

<strong>Note!</strong> <strong>With the changes to YouTube’s embed settings in Autumn 2018, video suggestions at the end of the video can no longer be blocked.</strong>

<ol>
 <li>Choose the element <strong>Video</strong> and click to open it.</li>
 <li>Click the screen <strong>Add your video here</strong>. Pop-up window <strong>Change Video/Audio</strong> will appear.</li>
 <li>Choose the <strong>File</strong> tab and click <strong>Browse/Upload Files.</strong></li>
 <li>The <strong>Browse Media Library</strong> pop-up window is displayed. If you want to save the video file into the library, first click <strong>Show uploaded file in library.</strong></li>
 <li>Click <strong>Upload new video file… </strong>and give a name to the video file. Then, upload it from your file.</li>
</ol>
Almost all the latest browsers support MP4 video format. For more information about MP4 videos, please check the following link:

<a href="https://caniuse.com/#feat=mpeg4">https://caniuse.com/#feat=mpeg4</a>

The maximum size for uploaded videos is 100MB.

If you don’t use a video service that optimises your videos for you but want to upload them directly as files to Builder, you should optimise the video files for web use yourself first. Here’s how to do it with Handbrake, a free open-source program.

You can download the software from: <a href="https://handbrake.fr/">https://handbrake.fr/</a>

<strong> </strong>

<strong>Instructions for use:</strong>

<strong>File</strong>
<ol>
 <li>Start the program and select the video file from the “Open” button or drag the video file onto the program</li>
 <li>Put the name and location of the new file you want in the “Save as” field.</li>
</ol>
<ol>
 <li>
<ul>
 <li><strong>Note: </strong>Use the .mp4 file extension instead of .m4v</li>
</ul>
</li>
</ol>
<strong>Summary Tab</strong>
<ol>
 <li>Tick “Web optimised” to allow the video file to load for the user in sections</li>
</ol>
<strong>Dimensions Tab</strong>
<ol>
 <li>Select either <strong>1080p</strong> or <strong>720p</strong> from the <strong>Resolution Limit drop-down menu</strong> (the latter if the video is more than a minute long)</li>
</ol>
<ol>
 <li>
<ul>
 <li><strong> Note: “</strong>Width” must be an even number.</li>
</ul>
</li>
</ol>
<ol>
 <li>Select “<strong>Quality: Constant Quality</strong>” between 23-30 RF (see below* for further guidance).</li>
 <li>Select <strong>“Framerate: Same as source (variable framerate)”.</strong></li>
</ol>
When everything is ready, press the top button: <strong>Start Encode!</strong>

*<strong>Note!</strong> The quality/file size can be changed using the Constant Quality slider in the Video tab:
<ul>
 <li>The numbers are “backwards”, so 23 is good quality, and 30 is bad.</li>
</ul>
<ul>
 <li>Below 20 is unsuitable for web use, and above 30 is already too poor.</li>
 <li>Even small changes can make a big difference if needed (and logarithmically, i.e. 20-21 makes a more significant difference than 29-30),
<ul>
 <li>In 720p video, between 20 and 23, there can be a 1/3 difference in file size, so it’s worth a few passes to experiment, especially with long videos (if you can’t split the video into several smaller videos or if you know that your target audience needs a very light video file size).</li>
</ul>
</li>
</ul>

Almost all modern browsers support MP4 video format. You can also upload a webm or Ogg video file alongside an MP4 file to support other browsers like Opera Mini.
To upload multiple video files with different formats simultaneously, please click the “<strong>Upload new video files…</strong>” button, which opens a file picker window (File Explorer on Windows, Finder on macOS). Select multiple files, e.g. MP4 + webm files, to upload while holding the CTRL key on Windows or CMD key on macOS and confirm the selected files. The maximum size for each uploaded file is 100MB.

<strong>Note!</strong> Be sure always to add the MP4 format. You cannot add webm or ogg video files without the MP4 format.

<h6 class="p1"><b>Click on the images to enlarge them.</b></h6>

<h5 class="p1">In the upgraded version you can define when the move forward button is shown:</h5>

<h5 class="p1">Element settings in Edit Element Contents view:</h5>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2021/08/Video_EN.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2022/01/video-1.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2021/08/Video_Edit_EN.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2022/05/video-ohje4.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2021/12/video-1.png" alt="" loading="lazy"></figure>