---
id: 123ce55f-c7f8-4404-88eb-51360b4d3dac
blueprint: doc
title: '8.4 Nagging'
---
<h4><strong>Purpose of the Feature</strong></h4>
With the Nagging feature (previously called “<em>Participants and reminders</em>”), you can invite people to complete an online course and remind those who still have unfinished courses that should have been completed already. Invitations can be sent manually or automatically, depending on the settings. The feature requires the email address of the person being invited.
<h4><strong>Accessing the Feature</strong></h4>
<ul>
 <li>The feature is available while editing modules.</li>
 <li>Click the gear icon of the module and select the option “<strong>Nagging</strong>…”.</li>
 <li>When the automatic reminder feature is enabled, the menu item displays the text “<strong>ON</strong>”.</li>
</ul>
<strong>Important Requirement: The module must be published before reminders can be sent.</strong>
<h4><strong>Main Dialogue Overview</strong></h4>
The Participants &amp; Reminders dialogue consists of three main sections:
<ol>
 <li>Buttons to edit the participants list</li>
 <li>List of participants</li>
 <li>Buttons to send reminders manually or automatically</li>
</ol>
<h4><strong>Adding Participants</strong></h4>
<ul>
 <li>Click the “<strong>Add</strong>…” button.</li>
 <li>Enter one or more email addresses in the form.</li>
 <li>Each email address must be placed on a separate line.</li>
</ul>
<h4><strong>Removing participants</strong></h4>
<ul>
 <li>Select a row in the participants table.</li>
 <li>Click the “<strong>Delete</strong>…” button.</li>
 <li>To select multiple rows, use <strong>Shift+click</strong> or <strong>Ctrl+click</strong>.</li>
</ul>
<h4><strong>Sending Invitations Manually</strong></h4>
<ul>
 <li>Select one or more email addresses from the participants table.</li>
 <li>Click “<strong>Send reminders manually…</strong>”.</li>
 <li>A pop-up window appears: “<strong>Send Reminders To Selected Participants By Email</strong>”.</li>
 <li>Fill in the subject and body of the reminder.</li>
 <li>You can use placeholders that will be automatically replaced when the email is sent:
<ul>
 <li>'<em>module</em>' (inside the curly braces) will be replaced with the name of the module</li>
 <li>'<em>link</em>' (inside the curly braces) will be replaced with the link to the module.</li>
</ul>
</li>
 <li></li>
 <li>When the reminder text is ready, click “<strong>Send to … participants</strong>.</li>
</ul>
<h4><strong>After sending</strong></h4>
<ul>
 <li>The “<strong>Reminders Sent</strong>” column increases by 1.</li>
 <li>The “<strong>Last Reminder</strong>” column updates with the new date.</li>
</ul>
<h4></h4>
<h4><strong>Sending Invitations Automatically</strong></h4>
The process of inviting participants can be automated.
<ul>
 <li>Click “<strong>Automatic Reminder settings</strong>…” to open the settings window.</li>
 <li>Check the box “<strong>Use automated email reminders</strong>” to enable automatic invitations.</li>
 <li>Configure the following options:
<ul>
 <li>Frequency of reminders (how often they are sent)</li>
 <li>Maximum number of reminders per user</li>
 <li>Subject and body of the reminder email</li>
</ul>
</li>
 <li>Click “<strong>Save</strong>” when the settings are ready.</li>
</ul>
<h4><strong>After saving</strong></h4>
<ul>
 <li>The “<strong>Reminders Sent</strong>” column increases by 1.</li>
 <li>The “<strong>Last Reminder</strong>” column updates with the new date.</li>
</ul>
<h4> <strong>Behaviour of Automatic Invitations</strong></h4>
<ul>
 <li>All participants receive the same invitation email until they complete the module, or they reach the maximum number of reminders set.</li>
 <li>You can pause invitations for specific participants:
<ul>
 <li>Select one or more rows in the participants table.</li>
 <li>Click “<strong>Pause / Unpause…</strong>”.</li>
</ul>
</li>
</ul>
<strong>Examples in the Participants Table</strong>

Look at the image on the right:
<ul>
 <li>teppo.testinen@apprix.fi → received 2 invitations, completed the module. No further invitations will be sent.</li>
 <li>jane.doe@gmail.com → received 3 invitations, not completed. May receive more depending on the maximum number set.</li>
 <li>erkki.esimerkki@gmail.com → received 2 invitations, then paused. Will not receive new invitations until unpaused.</li>
 <li>jack.testing@gmail.com has received 3 reminders, last reminder on the 09.11.2025</li>
</ul>
<h4></h4>
<h4><strong>Additional information on automatic settings</strong></h4>
<strong>Participants Table</strong>
<ul>
 <li>When automatic invitations are enabled, each new participant added to the table receives their first invitation immediately.</li>
 <li>The next invitation is scheduled according to the period set in the<strong> Reminder Settings</strong> dialogue.</li>
 <li>If a participant completes the module, no further invitations are sent.</li>
 <li>Paused participants do not receive invitations until unpaused.</li>
</ul>
<strong>Sending Period</strong>
<ul>
 <li><strong>Increasing the period</strong>: all invitations are postponed accordingly.</li>
 <li><strong>Decreasing the period</strong>: some participants may receive new invitations immediately, depending on the Last Reminder date.</li>
</ul>
<strong>Maximum Number of Invitations</strong>
<ul>
 <li><strong>Increasing the maximum</strong>: participants who previously reached the limit may receive new invitations, depending on the Last Reminder date.</li>
 <li><strong>Decreasing the maximum</strong>: participants stop receiving new invitations once they reach the new limit.</li>
</ul>
<strong> </strong>
<h4><strong>Nagging + Expiration features</strong></h4>
If the Nagging and Expiration features are enabled at the same time:
<ul>
 <li>The Nagging feature can be used to remind the employee of an incomplete online course or to invite them to take the course.</li>
 <li>When the Expiration feature is enabled, the course performance expires after a specified time.</li>
 <li>If Expiration reminders are also enabled, a reminder will be sent to those who have a course that is about to expire.</li>
 <li>When the performance expires, Nagging reminders can be sent to the employee again.</li>
</ul>

<h6 class="p1"><b>Click the images to enlarge them</b></h6>

<h6 class="p1"><b>Sending invitations manually</b></h6>

<h6 class="p1"><b>Sending invitations automatically</b></h6>

<h6 class="p1">The three main sections of the Participants &amp; Reminders dialogue</h6>

<h6 class="p1">Examples in the Participants Table</h6>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2025/12/PR-123.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2025/12/Picture1-1.png" alt="" loading="lazy"></figure>