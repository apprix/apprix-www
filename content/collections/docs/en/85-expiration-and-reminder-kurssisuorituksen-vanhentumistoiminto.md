---
id: 7cf19387-245b-4548-b821-e64bf9889208
origin: b56053c8-719b-4341-ba4e-8531f653c034
blueprint: doc
title: '8.5 Expiration and Reminder (Course completion expiration feature)'
---
<p><b>Expiration and Reminder</b> allows you to notify, for example, your organisation's staff or subcontractors that their course completion is expiring and must be retaken after a certain period. An example of this is safety training that must be completed, for instance, every year.</p><p>The feature can only be enabled if the participant's personal data (e.g. email address, phone number, and ID (unique identifier)) is collected in the course module. This data can be collected using SSO, email registration, or tax number check authentication methods.</p><p><strong>Note!</strong>
<p><b>Expiration</b> text box is shown at the beginning of the training. When the user has been identified (<i>e.g. using the following authentication methods: Email Registration, SSO, Tax number Check</i>), it contains a list of the user's previous completions and their validity periods.</p><p><strong>The Expiration feature works in a limited way with the Login element</strong>, because the user is only identified in the Login element, and for this reason it is not possible to display a list of the user's completions at the beginning of the training. However, the user is reminded of an expiring completion when the Expiration feature's reminder function (Reminder) is enabled and authentication in the training is done with the Login element.</p><h3>Expiration and reminder settings window</h3><p>Select <b>Expiration and Reminder</b> from the gear icon at the top of the <strong>Edit Module</strong> edit view</p><p>The <strong>Expiration and reminder settings</strong> window opens.</p><p>On the left side of the window, you can edit the message announced by the expiration feature in the first Intro element of the course, which reminds the participant of the course's validity period.</p><p>The settings for the <strong>Reminder</strong> feature can also be edited on the right side of the window, if the <b>Expiration and Reminder</b> feature is active, i.e. the checkbox in the view is ticked.</p><p><strong>Note!</strong> When the <strong>Remind user</strong> checkbox is not ticked/activated, the section's settings are deactivated in the view.</p><h3>Expiration settings (left side of the window)</h3><p>On the left side of the window, you can edit the content of the text fields and the validity period in days, months, or years.</p><p>The content of the text fields is shown to the participant as a message on the first page of the course, in the Intro element. If the participant has already completed the course previously, the message in the lowest text field is also shown to the participant, indicating when their previous course completions took place.</p><p>The dates of previous course completions are shown in the date format "yyyy-mm-dd". If a completion is no longer valid, the date is shown with a strikethrough.</p><h3>Reminder message before course expires settings (right side of the window)</h3><p>If you want the system to send a reminder message to participants before their course completions expire, activate the <strong>Remind user before course expires</strong> checkbox in the right side of the window (the checkbox can only be activated once the <strong>Expiration settings</strong> checkbox has been activated/ticked). The reminder can be set days, weeks, or months before the completion expires. The time to expiry is calculated in days from the moment the participant's course completion expires.</p><p><strong>For example:</strong> If the course was completed on 16.9.2020, the participant's course validity period is set to 12 months, and the expiry reminder is set to be sent one month before the completion expires, the participant will receive a reminder on 16.08.2021.</p><p>The upper text field is the email subject field and the middle field is the email message field. Tags (module name, module link, course expiry date, and company name) can also be used in the email message and they are replaced by the corresponding content in the email message. The text in the fields can also be formatted as needed. From the bottom field, you can test sending the reminder message to an email address of your choice.</p><p><strong>Note!</strong> Tags are entered in the message between curly braces <strong>{ }</strong>.</p><h3>Possible tags:</h3><ul></p>
 <li>module name = {module}</li>
 <li>module link = {link}</li>
 <li>completion expiry date = {expiration_date}</li>
 <li>company name = {tenant}</li>
</ul><p><strong>Note!</strong> If the <strong>Reminder</strong> feature is integrated with an HR system, reminder messages can be sent directly to the HR system. Participants will then receive reminder messages through the selected internal communication channels.</p><h3>How does the feature work from the participant's perspective?</h3><p>When a participant starts a course that has a validity period set, they see a notification about this in the <strong>Intro</strong> element. The message contains the information defined in the settings, such as the completion expiry date and reminder date.</p><ul>
 <li>If the participant:
<ul>
 <li>has not yet started the course, the course starts from the beginning.</li>
 <li>has not yet completed the course, the course continues from where they left off.</li>
 <li>has already completed the course previously, they can start a completely new completion. The completion is valid until the set validity period expires.</li>
</ul>
</li>
 <li>If the participant has previously completed the course, the completion dates are shown in the message.</li>
 <li>The participant receives a reminder message to their email address before the completion's validity expires.</li>
</ul><h3>Note!</h3><ul>
 <li>If the module is duplicated (<strong>Duplicate</strong>), the settings made in the <strong>Expiration and reminder</strong> window are also copied to the new module copy.</li>
 <li>Expiration reminders can be turned on or off per module.</li>
</ul><h3>Click images to enlarge them.</h3>

<p></p>

<p><img src="/files/docs/2024/05/8.5.1-Expiration.png"></p>

<p></p>

<p><img src="/files/docs/2024/05/8.5.2-Expiration.png"></p>
<p>The course participant has completed the course twice. The first completion has expired and the second is still valid.</p>

<p></p>

<p><img src="/files/docs/2024/05/8.5.3-Expiration-2.png"></p>

<p></p>

<p><img src="/files/docs/2024/05/8.5.4-Expiration-2.png"></p>
<p><source src="/files/docs/2026/01/Send-manually-191225.mp4" type="video/mp4"> </video><video controls preload="metadata" style="width:100%;border-radius:0.75rem;box-shadow:0 1px 2px 0 rgba(0,0,0,.08);margin-top:1rem"> <source src="/files/docs/2026/01/Aut-reminder-set.mp4" type="video/mp4"> </video></p>
