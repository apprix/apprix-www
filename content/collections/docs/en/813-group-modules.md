---
id: 45779100-8b18-476d-9956-680a42c3c397
origin: 30c4e460-0604-444c-92c6-fef1753e5332
blueprint: doc
title: '8.13 Group Modules'
---
<p>You can add modules to a module group so that course participants can complete the training from any of the different language version modules. In practice, this means that the <strong>Nagging</strong> (Participants &amp; Reminders) <strong>settings</strong> are shared with modules in the same module group. This includes email addresses added to Nagging settings and Nagging reminder settings. Other settings, such as User Authentication and Expiration settings, as well as statistics, remain module-specific.</p><h3>Module Group and Nagging Editing Instructions</h3><p>Add a module to a module group as follows:</p><ol>
 <li>Open the module to be added to the module group in <strong>Edit</strong> mode</li>
 <li>Select "<strong>Module Groups…</strong>" from the top gear menu</li>
 <li>Create a new group for the module by selecting "<strong>Add to new group</strong>" or add the module to an existing group by selecting "<strong>Add to existing group</strong>"</li>
</ol><p>Edit the <strong>Nagging</strong> (also known as <strong>Participants &amp; Reminders</strong>) settings as follows to add the required email addresses and turn on the Nagging automatic reminder:</p><ol>
 <li>Open the module to be added to the module group in <strong>Edit</strong> mode</li>
 <li>Select "<strong>Nagging…</strong>" from the top gear menu</li>
 <li>If needed, add any missing email addresses of people to be reminded by selecting "<strong>Add</strong>…".</li>
 <li>Enter the email addresses on separate lines in the text field and click "<strong>Add participants</strong>"</li>
 <li>Edit the Nagging automatic reminder settings by clicking "<strong>Automatic Reminder Settings…</strong>".</li>
 <li>Turn on "<strong>Use automated email reminders</strong>" and if necessary edit the reminder interval from the dropdown "<strong>Send reminders until course completed every</strong>" and the maximum number of reminders from the dropdown "<strong>Max. number of reminders per user</strong>".</li>
 <li>Then enter the email subject in the "<strong>Subject</strong>" field and the email message content in the larger text field below. More information on editing the content and using variables, for example, can be found behind the question mark icons. For example, the <strong>{link}</strong> placeholder is replaced by the module's address. If the module is linked to MyCourses, we recommend replacing the <strong>{link}</strong> placeholder with the MyCourses course link. Through such a course link, the user can choose which language version to complete.</li>
</ol><h3>Want to know more? Here's more!</h3>
<h3>What link can a Builder training participant use when there are multiple language versions of the training?</h3><p>When there are multiple language versions, we recommend giving the participant a link through which they can choose between the language versions before completing the actual training. The link should lead to a place where the language versions are linked. For example, a link to a Landing Page or a MyCourses course.</p><p>In reminder messages for features such as Nagging and Expiration, it is important to use this link so that the participant can find the place through which to complete the training.</p><p>When the language versions of the training are linked to MyCourses, we recommend giving the participant the MyCourses course link. When the language versions of the training are linked to a Landing Page module, we recommend giving the participant a direct link to the Landing Page module.</p><h3>What is the difference between a MyCourses course, a Landing Page training button, and a Builder Module Group?</h3><p>A MyCourses course, a Landing Page training button, and a Module Group are ways to group different modules (e.g. language version modules) into a single entity.</p><ul>
 <li>When any of the modules linked in this way has been completed, the entity is considered completed.</li>
 <li>When any module linked to a MyCourses course has been completed, the MyCourses course entity is considered completed.</li>
 <li>When any module linked to a Landing Page training button has been completed, the training button is shown as completed.</li>
 <li>When any of the modules belonging to a Module Group has been completed, Builder features such as Nagging consider the entity completed, and the user will no longer be reminded to complete the entity.</li>
</ul><h3>How do MyCourses course links work?</h3><p>When an end user opens a MyCourses course link, they are asked to log in to MyCourses if they have not already done so. They then see the MyCourses course language selection dialog, from which they can choose the language in which to complete the course.</p><h3>How do you send a reminder message to MyCourses users who have not yet completed a MyCourses course that has two or more language versions?</h3><p>The Builder modules linked to a MyCourses course should be grouped using the Module Groups feature, and Nagging reminder settings should be defined for this group of modules so that the reminder message contains a link to the MyCourses course.</p><h3>Group Modules &amp; MyCourse - example</h3>

<p></p>

<p><img src="/files/docs/2025/02/End-user.png"></p>

<p></p>

<p><img src="/files/docs/2025/02/Landing-page-for-gropu-modules.png"></p>

<p></p>

<p><img src="/files/docs/2025/02/Module-group-2.png"></p>

<p></p>

<p><img src="/files/docs/2025/02/Module-Group-3.png"></p>

<p></p>

<p><img src="/files/docs/2025/02/Participants-and-reminders.png"></p>

<p></p>
