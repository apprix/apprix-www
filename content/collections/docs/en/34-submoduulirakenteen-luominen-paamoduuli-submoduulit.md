---
id: b827ca8f-c002-4e84-a9ac-d51ac232c750
blueprint: doc
title: '3.4 Creating a Submodule Structure (Main Module + Submodules)'
---
<h4>When Is It Recommended to Create a Submodule Structure?</h4>
If you need a Table of Contents (submenu) for your module and the possibility to split the module’s content into different sections or subject areas (submodules), you can use the Submodule functionality. A submodule structure consists of a main module and submodules that are connected to the main module.

The benefits of using submodules:
<ul>
 <li>In long modules, it is easier for the trainee to perceive the whole training content. </li>
 <li>Editing the module is easier since the content is divided into submodules rather than one long module.</li>
 <li>You can specify whether the submodules are mandatory or optional. </li>
 <li>You can easily add or remove submodules from the training’s content. </li>
 <li>The trainee can go through the course in parts, completing only one or more submodules in one session if the submodule structure contains a <b><a href="#login">Login</a></b> element or if the possible <b><a href="#sso">SSO </a></b>feature is switched on in the module. 
<ul>
 <li>In this case, the trainee can continue to go through the training starting directly from the uncompleted submodules when returning to the course.</li>
 <li>A <b>Login</b> element is placed in the main module before the <b><a href="#submenubuttons">Submenu Buttons</a></b> elements that functions as the menu for submodules.</li>
</ul>
</li>
</ul>

<h6 class="p1"><b>Click on the images to enlarge them.</b></h6>

<h6 class="p1">A main module that contains two submodules.</h6>

<h6 class="p1">The Submenu buttons element in Published mode.</h6>

<h4>Creating a Submodule Structure</h4>
Submodule structures can be created in many different orders but in this example, we will start from the main module and proceed to creating submodules.

<b>Step 1: Creating the main module</b>
<ol>
 <li>Create a module. Name the module in a way that it describes the subject or purpose of the course. 
<ul>
 <li>To make it easier to discern and further work on the structure later if the structure is taken apart, add the word "Main Module" in the name. For example "Safety Training – Main Module". Click <b>Save</b>.</li>
</ul>
</li>
 <li>Add the <b>Submenu buttons</b> element to your module by clicking <b>Add element</b> and selecting <b>Submenu buttons</b> from the list of elements. </li>
 <li>Open the Submenu buttons element, write the menu title and some brief instructions (for example, Here you can find the sections of this training. You can go through these in one or in multiple sessions by re-login. However, we suggest you go through at least one section at a time. You can go to the end of the training once you have completed all sections.)</li>
 <li>In the <b>Submenu buttons</b> element, select<b> Edit submenu settings</b> to add the <span>submodules.</span></li>
 <li>Add the needed submodules by clicking the <b>Add button</b>. You can also name the submodules by clicking the text fields. Use the handles on the left to drag buttons into a different order, if needed.</li>
 <li>Click the <b>Trash</b> icon if you need to remove a submodule.</li>
 <li>If you wish that the trainee performs the submodules in order, select <b>Yes </b>button at the top of the window.</li>
 <li>If you wish that all submodules must be completed before the trainee is able to go forward with the training, select <b>Yes</b> button at the top of the window.</li>
</ol>
<b>Step 2: Convert modules to submodules</b>

Submodules are created from normal modules.<b>
</b>
<ol>
 <li>Create and name the module in a way that it describes the content or subject area of the submodule.
<ul>
 <li>To make it easier to link the submodule back to the main module if the structure is taken apart later in time, add the name of the module structure after the name of the submodule. For example: Introduction to Safety – Safety Training"</li>
</ul>
</li>
 <li> You can now edit the module's content or continue with it later. </li>
 <li>Select <b>Change to submodule</b> from the <b>Submodule Settings</b> menu.
<ul>
 <li>Note! If the module you are trying to change to a submodule is in <strong>Published </strong>mode<strong>,</strong> <strong>Submodule Settings</strong> button is hidden. You need to <strong>Unpublish</strong> the module if you wish to change the module to a submodule.</li>
</ul>
</li>
 <li>The most convenient way to link the submodules to the main module is to link all submodules at once. Select <b>Not now, link to a menu later</b> button at the lower right corner.</li>
 <li>Your submodule is an orphan now. 
<ul>
 <li><b>Note! </b>The I<b>ntro</b> and <b>Finish </b>elements have been automatically hidden from the submodule, as the main module has the beginning and end to structure.</li>
</ul>
</li>
</ol>
<b>Step 3: Link submodules to the main module</b>

Once you have created the main module and submodules, you can link the submodules to your main module.
<ol>
 <li>In your main module, open the <b>Submenu buttons</b> element.</li>
 <li>Select <b>Edit Submenu Settings</b> option from the<b> gear</b> icon on the top of the window. Add as many buttons as needed by selecting the <b>Add Button</b>.
<ul>
 <li>It is recommended to name the buttons to match the names of the submodules (For example: Introduction to Safety – Safety Training submodule's button would be named "Introduction to Safety".</li>
 <li>If possible, add a time estimate for how long it approximately takes to complete the module.</li>
</ul>
</li>
 <li>Then select <b>Add</b> next to the first button. You will see a view of all unlinked submodules. Click on the submodule you want linked to the main module.</li>
 <li>Link the rest of the submodules accordingly.</li>
</ol>
<b>Step 4: Editing</b>
<ol>
 <li>You can edit your submodules by selecting the main module's editing mode and then Browse submodules on the bottom.</li>
 <li>Click on the name of the submodule to edit it.
</li>
 <li>You can go back to the main module by clicking its header (main module’s name) in the upper left corner (in light blue colour).
</li>
</ol>
<b>Note!</b> Remember to publish the main module and all submodules separately. <u>Unpublished submodules are not visible</u> in the submodule menu (<b>Submenu buttons</b>)<b>.</b>

<h6 class="p1">How do you insert the "SubMenu buttons" element in the main module, and how do you edit its submenu settings?</h6>

<h6 class="p1">How do you change a module to a submodule and then link it to its main module?</h6>

<h6 class="p1">How do you publish the submodules linked to a main module?</h6>

<h6 class="p1">A green ball appears next to the published submodules in the submodule list.</h6>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2020/09/Example_Training-1000x453.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2020/09/Submenu_1-1000x628.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/07/Main-module-submodule-1-2.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/07/Main-module-submodule-2-1.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/07/Main-module-submodule-3-2.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/07/published-submodules-green-balls-1.png" alt="" loading="lazy"></figure>