---
id: 01dfb933-ccd0-4c9c-a1bd-7d284d625b50
blueprint: doc
title: '7.30 Pass/Fail and Pass/Fail Always'
---
<h4 data-fontsize="18" data-lineheight="27">Pass/Fail</h4>
With the <b>Pass/Fail</b> element, you can inform the trainee that they have not passed the training test and indicate the next step. Generally, this element is added to the module after the test exercise elements at the end of the module (e.g. <b>Check Box</b>, <b>Multichoice</b>, <b>Multichoice More Text</b>, <b>True/False</b>) before course summary elements, such as <b>Feedback</b>, <b>Commitment</b>, <b>Slider Write Text</b>).

If a module has a test at the end and other module points need not be counted, remove points from all other elements except elements included in the test from the <strong>Edit Points... </strong>tool. In this manner, only test points matter regarding passing the course. In a submodule structure with a test at the end, the elements included in the test and the <b>Pass/Fail</b> element are usually placed after the <b>Submenu Buttons</b> element in the main module.

<b>Note!</b> The <b>Pass/Fail</b> element should not be added <u>as the last element before the <b>Finish</b> element</u>, as it will not work correctly.

As an additional feature, the<b> Pass/Fail</b> element can be customized to work so that it can be added at the end of each submodule. With this approach, the submodules are the test areas that must be passed to continue the course. In this case, there is no test at the end of a submodule structure (in the main module), and all submodule points need to be considered for passing a submodule. Place the <b>Pass/Fail</b> element at the very end of every submodule. The trainee will only be redirected to the submodule menu (Submenu Buttons) <span>when they successfully pass the submodule. If not, the trainee will be redirected back to the beginning of the submodule until they get enough points to pass the submodule. </span>

After the trainee has used all of their retries, they fail the course module and must start the course from the beginning. The trainee's final test performance will be stored in the user data. To filter out failed course attempts, this data can be collected using an authentication method (for example, Login element, Email Registration, Tax number check).

<strong>Note!</strong>

The module statistics are not stored in Preview mode, so the Pass/Fail and Failure elements do not work there. <strong>Points are only calculated in Published mode</strong>. Why does Builder work like this? The statistics should record the student’s performance, not the module’s testing data.
<h4 class="fusion-responsive-typography-calculated" data-fontsize="21" data-lineheight="31.5px"><b>Editing Instructions</b></h4>
<ol>
 <li>Open the <b>Pass/Fail</b> element in the <b>Edit Element Contents</b> view.</li>
 <li>You can start by adding the element’s background image.</li>
 <li>Then click the gear icon at the top left, which opens the settings menu.</li>
 <li>The Pass/Fail settings pop-up window will open. From here, you can choose the following options:
<ul>
 <li>from which element the trainee will restart the test</li>
 <li>the number of retries allowed.</li>
</ul>
</li>
 <li>To select the element where the trainee will be redirected to retry the training exercises, click one element with a light grey background; the arrow should move next to it.</li>
 <li>The maximum retry count can be changed from the dropdown menu in the orange area.
<ul>
 <li>If the maximum retry count is set to 0, the trainee will have to restart the course after failing to get enough points from the module’s exercises.</li>
 <li>If the maximum retry count is larger than 0, the trainee will be moved from the Pass/Fail element to the retry element 1-5 times before the trainee has to restart the whole course/module.</li>
</ul>
</li>
 <li>Click Done when ready.</li>
</ol>
In the <strong>Edit Element Contents </strong>view, you can change the content of the info boxes.

Note that these texts will be displayed to the trainee in case they fail the test:
<ul>
 <li>The top text is always displayed when the trainee fails the training (<em>You did not get enough points to pass the training this time</em>).</li>
 <li>The middle text appears when the trainee has one more attempt left (<em>You can try the test one more time by clicking the button below. After that, you will be redirected to the beginning of the training</em>).</li>
 <li>The bottom text appears when the trainee has to start the training from the beginning (<em>You didn't pass the final test on your two tries and will now have to start the training again. Click the button below to restart the training</em>).</li>
</ul>
<strong>Note!</strong> You cannot edit the x/x points since these are the trainee’s test points and the max points that come automatically from Builder after finishing the test.

<b>Note! </b>
<ul>
 <li>From the gear icon on top of the <b>Edit Module</b> view, click <b><a href="#editpoints">Edit Points</a></b> to check and set the correct...
<ul>
 <li>number of test points</li>
 <li>and percentage of points required to pass the exam.</li>
</ul>
</li>
 <li>If Hotspot elements have been added to the module and contain one or more True/False items, the points for these items can be found in the Edit Points window.
<ul>
 <li>Please note that the Pass/Fail element does not calculate or recognise these points.</li>
 <li>This means that if the Pass/Fail element is used in a module, for the Pass/Fail element to calculate the module points correctly, you need to assign zero points (0) to Hotspot element(s) in the Edit Points window since the Edit Points feature counts the number of Hotspot element's items. Still, Builder does not use them when calculating the final points in the Pass/Fail element.</li>
</ul>
</li>
 <li><strong>If you duplicate, add or remove items from a module/submodule containing the Pass/Fail element; please double-check the element from which the new retry should start from the Pass/Fail element's settings (gear icon on the top left corner of the element view).</strong></li>
</ul>

<h4 data-fontsize="18" data-lineheight="27">Pass/Fail Always</h4>
<p data-fontsize="18" data-lineheight="27"><strong>How does the Pass/Fail Always element differ from the Pass/Fail element?</strong></p>
The <b>Pass / Fail Always</b> element appears also after a successful test (when a trainee gets enough points to pass the test). In the element, the trainee sees the number of incorrect and correct answers as x points out of points.
<h4><b>Editing Instructions</b></h4>
<ul>
 <li>Click the gear icon on the upper left corner to access the settings as in the <b>Pass/Fail</b> element (see instructions above for the Pass/Fail element).</li>
 <li>Edit the text that is displayed when the trainee has not passed the test and the text that is displayed when the trainee has passed the test.</li>
</ul>

<h6 class="p1"><b>Click on the images to enlarge them.</b></h6>

<h5><strong>Note!</strong> The two pages below will appear only if the trainee has not passed the test.</h5>

<h5 class="p1">Pass/Fail element settings in Edit Element Contents view:</h5>

<h5 class="p1">In the <strong>Edit Element Contents </strong>view, you can change the content of the info boxes that will be shown to the trainees if they fail the test.</h5>

<h5 class="p1">How to update the test points?</h5>

<h5 class="p1">"<strong>Retry from here</strong>" arrow in the <strong>Pass/Fail</strong> element.</h5>

<figure class="doc-image"><img src="/files/docs/2024/03/PassAndFail-element.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2021/09/Passfail_1.jpg" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2021/09/passfail_2.jpg" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2021/09/PassFail_Edit_EN.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2024/03/Help-PassAndFail-text.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/09/test-1000x648.jpg" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2020/09/passfail2.png" alt="" loading="lazy"></figure>