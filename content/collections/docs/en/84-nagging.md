---
id: 4cc48603-5f6d-4fb1-9fa2-3bf624e7dbef
origin: 123ce55f-c7f8-4404-88eb-51360b4d3dac
blueprint: doc
title: '8.4 Nagging'
---
<h3>Purpose of the feature</h3>
<p>The <strong>Nagging</strong> feature (formerly called "Participants and reminders") allows you to invite people to complete an online course and remind people about courses they have not yet completed that they should have completed earlier.</p>

<p>Invitations can be sent <strong>manually</strong> or <strong>automatically</strong> according to settings. The feature requires the invited person's email address.</p>
<h3>Using the feature</h3>
<ul>
 <li>The feature is available in the module edit mode.</li>
 <li>Click the module's <strong>gear icon</strong> and select <strong>"Nagging…"</strong>.</li>
 <li>When the automatic reminder is enabled, the menu shows the text <strong>"ON"</strong>.</li>
</ul>
<p><strong>Note: The module must be published for reminders to be sent.</strong></p>
<h3>Structure of the Participants &amp; Reminders main window</h3>
<p>The <strong>Participants &amp; Reminders</strong> window consists of three parts:</p>
<ol>
 <li>Buttons for editing the participant list</li>
 <li>The participant list</li>
 <li>Buttons for sending reminders manually or automatically</li>
</ol>
<h3>Adding and removing participants</h3>
<ul>
 <li><strong>Adding:</strong>
<ul>
 <li>Click the <strong>"Add…"</strong> button.</li>
 <li>Enter one or more email addresses (one address per line).</li>
</ul>
</li>
 <li><strong>Removing:</strong>
<ul>
 <li>Select a row from the participant table.</li>
 <li>Click "<strong>Delete</strong>…".</li>
 <li>You can select multiple rows using Shift+click or Ctrl+click.</li>
</ul>
</li>
</ul>
<h3>Sending invitations manually</h3>
<ol>
 <li>Select one or more email addresses from the participant table.</li>
 <li>Click <strong>"Send reminders manually…"</strong>.</li>
 <li>A popup opens: <strong>"Send Reminders To Selected Participants By Email"</strong>.</li>
 <li>Fill in the reminder's <strong>subject</strong> and <strong>content</strong>.</li>
 <li>You can use the following placeholders:
<ul>
 <li>"module" in curly braces → replaced by the module name</li>
 <li>"link" in curly braces → replaced by the module link</li>
</ul>
</li>
 <li>Click <strong>"Send to … participants"</strong>.</li>
</ol>
<p><strong>After sending: </strong></p>
<ul>
 <li>The <strong>"Reminders Sent"</strong> column increases by one.</li>
 <li>The <strong>"Last Reminder"</strong> column is updated with a new date.</li>
</ul>
<p><strong> </strong></p>
<h3>Sending invitations automatically</h3>
<p>Inviting participants can be automated.</p>
<ul>
 <li>Click <strong>"Automatic Reminder settings…"</strong> to open the settings.</li>
 <li>Select the <strong>"Use automated email reminders"</strong> checkbox.</li>
 <li>You can define:</li>
</ul>
<ul>
 <li>
<ul>
 <li>The reminder sending interval</li>
 <li>The maximum number of reminders per user</li>
 <li>The reminder email subject and content</li>
</ul>
</li>
</ul>
<ul>
 <li>Click "<strong>Save</strong>" to save the settings.</li>
</ul>
<p><strong>After sending: </strong></p>
<ul>
 <li>The <strong>"Reminders Sent"</strong> column increases by one.</li>
 <li>The <strong>"Last Reminder"</strong> column is updated with a new date.</li>
</ul>
<h3>How automatic invitations work</h3>
<ul>
 <li>All participants receive the same invitation until:
<ol>
 <li>they complete the module, or</li>
 <li>they reach the set maximum number of reminders.</li>
</ol>
</li>
 <li>You can pause invitations for certain participants using the <strong>"Pause / Unpause…"</strong> button.</li>
</ul>
<p>Examples from the participant table</p>
<ul>
 <li><strong>teppo.testinen@apprix.fi</strong> → received 2 invitations and completed the module. Will not receive any more invitations.</li>
 <li><strong>jane.doe@gmail.com</strong> → received 3 invitations, has not completed. May receive more invitations depending on the set maximum.</li>
 <li><strong>erkki.esimerkki@gmail.com</strong> → received 2 invitations, then was paused. Will not receive new invitations until the pause is removed.</li>
</ul>
<h3>Additional information on automatic settings</h3>
<p><strong>Participant table</strong></p>
<ul>
 <li>A new participant receives the first invitation immediately.</li>
 <li>The next invitation is scheduled according to the set sending interval.</li>
 <li>When a participant completes the module, no new invitations are sent.</li>
 <li>Paused participants do not receive invitations until the pause is removed.</li>
</ul>
<p><strong>Sending intervals</strong></p>
<ul>
 <li><strong>Increasing the interval:</strong> invitations are pushed back to a later time.</li>
 <li><strong>Decreasing the interval:</strong> some participants may receive an invitation immediately, depending on the <strong>Last Reminder</strong> date.</li>
</ul>
<p><strong>Maximum number</strong></p>
<ul>
 <li><strong>Increasing the maximum:</strong> participants who had reached the limit may receive new invitations.</li>
 <li><strong>Decreasing the maximum:</strong> participants stop receiving invitations as soon as the new limit is reached.</li>
</ul>
<h3>Nagging + Expiration features</h3>
<p>If the Nagging and Expiration features are both enabled at the same time:</p>
<ul>
 <li>The Nagging feature can be used to remind about an incomplete completion or to invite a person to complete the online course.</li>
 <li>When the Expiration feature is enabled, the course completion expires after the defined period.</li>
 <li>If Expiration reminders are also enabled, a reminder is sent about an expiring completion.</li>
 <li>When a completion has expired, Nagging reminders can be sent to the participant again.</li>
</ul>

<h3>Click images to enlarge them.</h3>


<h3>Invitation sent manually</h3>

<h3>Invitation sent automatically</h3>

<h3>Three main sections of the Participants and Reminders dialog</h3>

<h3>Examples in the participant table</h3>

<p></p>

<p><img src="/files/docs/2026/01/PR-123.png"></p>

<p></p>

<p><img src="/files/docs/2026/01/Picture1.png"></p>

<p></p>
