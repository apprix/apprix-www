---
id: b56053c8-719b-4341-ba4e-8531f653c034
blueprint: doc
title: '8.5 Expiration and Reminder'
---
This feature informs, for example, an organization's staff and subcontractors that a course must be completed again after a certain period (e.g., Safety training once a year).

Expiration settings can only be enabled if trainees' information (e.g. email address, phone number, ID) are available. This information can be collected with the SSO, Email Registration or Tax Number Check identification methods.

<strong>Note!</strong>

The Expiration textbox is shown at the beginning of the course. Once the user has been authenticated (e.g. using one of the following authentication methods: Email Registration, SSO, Tax number Check), it contains a list of the user's previous course completions.

The Expiration feature has limited functionality with the <strong>Login element</strong> because the user is only identified in the Login element. Therefore, it is not possible to display a list of the user's course completions at the beginning of the course. However, the user will be reminded of an expiring course when the Reminder feature of the Expiration tool is enabled, and the course is authenticated with the Login element.
<h4 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px">Expiration and Reminder Settings Window</h4>
From the gear icon at the top of the <strong>Edit Module</strong> view, choose “<strong>Expiration &amp; Reminder</strong>“.

Once the “<strong>Expiration &amp; Reminder</strong>“ option is selected, the <strong>Expiration and reminder settings</strong> window is opened.

From the left half of the window, you may enable the Expiration message. The Expiration message appears at the beginning of the course in the <strong>Intro</strong> element to remind the trainee about how long the course completion is valid for. The user can also enable the email <strong>Reminder</strong> feature from the tick box on the right half of the window if the<strong> Expiration &amp; Reminder</strong> tick box is also activated.

<strong>Note! </strong>When the <strong>Remind user</strong> tick box is deselected, the settings will not be visible.
<h4 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px">Expiration Settings (Left Half of the Window)</h4>
In the <strong>Expiration settings</strong> on the left side of the settings window, you may edit the content of the text boxes and set how long the course completion is valid for in days, weeks, or months. The content of the textboxes will be shown to the trainee at the beginning of the course, in the Intro element. If the trainee has already completed the course the lower textbox will be included in the message.

Earlier course completion dates are shown as in format “yyyy-mm-dd”. If the training item is not valid anymore the date will be crossed out. The format of the text can be edited in the textboxes.
<h3 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px"></h3>
<h4>Reminder Message Before Course Expires Settings (Right Half of the Window)</h4>
If you need to send a reminder message to the trainees before their earlier course expires, this feature can be enabled by clicking the <strong>Reminder</strong> tick box at the top left of the settings window. The reminder can be set in days, weeks, or months. The time is calculated in days from the moment when the trainee’s course validity period will expire.

E.g. The course was successfully completed on 16.09.2020, trainee’s course validity period is set to 12 months and the reminder is set to be sent 1 month before the expiration date. The trainee will receive the reminder message on 16.08.2021.

The upper text box is for the email subject, the middle text box is for the email content. Tags (module name, module link, expiration day and company name) can also be used in the email message and these will be replaced with the corresponding content in the email. The format of the text can be edited in the text boxes. At the bottom, there is a field that can be used for sending test emails.

<strong>Note!</strong> Tags are inserted inside curly brackets<strong> { }</strong>

Available tags:
<ul>
 <li>module name = {module}</li>
 <li>module link = {link}</li>
 <li>expiration date = {expiration_date}</li>
 <li>company name = {tenant}</li>
</ul>
<strong>Note! </strong>In case the <strong>Reminder</strong> feature is integrated with company’s HR system, reminders may be sent directly to the HR system. The trainees will receive the Reminder message via their internal communication channels.
<h3 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px"></h3>
<h4 class="fusion-responsive-typography-calculated" data-fontsize="20" data-lineheight="30px">How Does This Feature Work From a Trainee’s Perspective?</h4>
When a trainee starts a course that has a validity period, a message will appear in the <strong>Intro</strong> element. The message contains the information entered in the feature settings (e.g. expiration time and reminder date).
<ul>
 <li>If the trainee:
<ul>
 <li>has not yet started the course, the course will start from the beginning</li>
 <li>did not complete the course, they can continue from where they left off earlier</li>
 <li>has already completed the course, they may start a completely new course which will be valid until the expiration period has elapsed.</li>
</ul>
</li>
 <li>If there are previously completed courses, their dates will be shown in the message.</li>
 <li>The trainee will get a reminder message before their earlier course completion expires.</li>
</ul>
<strong>Note!</strong>
<ul>
 <li>When a module is duplicated, the <strong>Expiration and reminder</strong> settings are also copied to the new module.</li>
 <li>Reminders can be turned on or off a module-by-module basis.</li>
</ul>

<h6 class="p1"><b>Click on the images to enlarge them.</b></h6>

<h6>Expiration textbox: The course participant did not previously complete the course.</h6>

<h6>Expiration textbox: The course participant has completed the course twice. The first has expired, and the second is still valid.</h6>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/05/8.5.1-Expiration-1.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/05/8.5.2-Expiration-1.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/05/8.5.3-Expiration-3.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2024/05/8.5.4-Expiration-3.png" alt="" loading="lazy"></figure>