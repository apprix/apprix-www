---
id: f659141f-7f55-4cdc-ab62-f40c77e1bb6d
origin: b08a97a3-508b-4fae-9016-85532c3e1b5f
blueprint: doc
title: '8.2.1 Email Registration 2.0'
---
<p>Email Registration 2.0 is an email registration authentication mechanism that allows course participants to register in Builder and create a username and password. After registration, the same username and password can be used in all modules where email registration is enabled. If the feature is enabled, course participants must use a valid and unique email address (or mobile phone number).</p>

<p><strong>Login form</strong></p>

<p>The login form is the first page the learner sees when they start the course.</p>

<p>The login form has an email field. When the email field is filled in, the learner clicks Next or presses Enter, at which point the system checks whether an account exists or not.</p>

<p><img src="/files/docs/2024/02/Picture1-Login-form-1.png"></p>

<p><strong>If the account does not yet exist</strong></p>

<p>If no account exists when the registration form opens, the learner can enter their information (first name, last name, and password) and click the Register button.</p>

<p><img src="/files/docs/2024/02/Picture-2-Registration-Form-1.png"></p>

<h3>Note! The user's email address, phone number, and login ID must be unique.</h3>

<p>The characters available for login are:</p>

<ul>
 <li>Latin letters (both upper and lower case)</li>
 <li>numbers</li>
 <li>characters -._@.</li>
</ul>

<h3>Depending on the tenant settings, the password strength must be "medium" or "strong".</h3>

<p>Medium means the password must contain:</p>

<ul>
 <li>at least 8 characters</li>
 <li>Latin uppercase letters</li>
 <li>Latin lowercase letters</li>
</ul>

<p>Strong passwords also require at least one special symbol from this set:</p>

<p>!"#$%&amp;'()*+,./:;&lt;=&gt;?@[\]-^_`~</p>

<h3>Note! Before registration, the learner must verify their email address or phone number with a PIN code.</h3>

<p>After the learner has clicked the Register button, a new popup opens. It asks the learner whether they want to receive the PIN code by email or phone. Once they have chosen one of the options, they receive a PIN code which they must enter in the form. After this, they can start the course.</p>

<p><img src="/files/docs/2024/02/Picture3-Send-PIN-code-1.png"></p>

<h3>Note! The learner must complete authentication within 10 minutes.</h3>

<p><img src="/files/docs/2024/02/Picture4-Insert-PIN-Code-1.png"></p>

<p><strong>PIN code verification</strong></p>

<p>PIN code verification can be done using the user's email address or phone number.</p>

<p>The code contains 6 randomly generated digits that are stored in the user's session for 5 minutes. Within this period, the code does not change. By clicking the Resend button, the user receives the same code each time until it expires. After this, the system generates a new code. Note that the previous code is no longer valid.</p>

<p>The number entry field is a standard input field and supports all common text editing functions such as copying, pasting, editing, deleting, etc. When the user enters six digits, the verification process starts automatically.</p>

<p><strong>2. If the account exists but the course participant has forgotten their password</strong></p>

<p>The learner clicks the "Forgot my password" link. A popup for account recovery opens. The learner fills in their email address and clicks the Send PIN code button. Once the PIN code has been sent to the email address, the learner enters the code in a new popup. A new password window opens, and the learner can change their password here. Once the password has been changed, the course opens.</p>

<p><strong>3. The learner has registered and remembers their password.</strong></p>

<p>The learner enters their email address in the login form and then presses the Next button. A new window opens. Here they enter their password and press the Continue button. The course can now be started.</p>

<p><strong>Security protection</strong></p>

<p>The system has a built-in firewall capable of detecting and blocking suspicious user activity. The firewall used by Apprix includes multiple layers of protection.</p>
