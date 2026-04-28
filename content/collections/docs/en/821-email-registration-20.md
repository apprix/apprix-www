---
id: b08a97a3-508b-4fae-9016-85532c3e1b5f
blueprint: doc
title: '8.2.1 Email Registration 2.0'
---
<div class="fusion-text fusion-text-180">

Email Registration 2.0 is an authentication mechanism that allows course participants to register with Builder and create a username and password. Once the course participants are registered, the same username and password can be used in all modules where email registration is enabled. Course participants must use a valid and unique email address (or mobile phone number) if the feature is enabled.

<strong>Login form</strong>

The login form is the first page a course participant sees when starting a course. The course participant fills in the email address and clicks the <strong>Next</strong> button. The system now checks whether the account exists or not.

<img class="wp-image-5440 aligncenter" src="https://faq.apprix.fi/wp-content/uploads/2024/02/Picture1-Login-form.png" alt="" width="306" height="238" />

<strong>1. If the account does not yet exist</strong>

If no account exists when the registration form opens, the course participant can enter their details (first name, surname and password) and click the <strong>Register</strong> button.
<div class="fusion-text fusion-text-180">

<img class="wp-image-5441 aligncenter" src="https://faq.apprix.fi/wp-content/uploads/2024/02/Picture-2-Registration-Form.png" alt="" width="317" height="295" />

<strong>Note! </strong><strong>The course participant’s email address, phone number and login ID must be unique.</strong>

<strong>Available characters for the login are:</strong>
<ul>
 <li>Latin letters in both cases</li>
 <li>numbers</li>
 <li>characters -._@.</li>
</ul>
<strong>Depending on the tenant settings, the password’s strength should be medium or strong.</strong>

Medium strength means that the password must contain the following:
<ul>
 <li>at least eight characters</li>
 <li>uppercase Latin letters</li>
 <li>lowercase Latin letters</li>
</ul>
A strong password, in addition, requires at least one character from this set:

!”#$%&amp;'()*+,./:;&lt;=&gt;?@[]-^_`{|}~

<strong>Note! Before registering, the course participant must confirm their email address or phone number with a PIN code.</strong>

A new pop-up window opens after the course participant clicks the <strong>Register</strong> button. It asks the student if they want to receive the PIN code by email or phone. Once they have chosen one of the two options, they will receive a PIN code, which they must enter into the form. They can then start the course.

<img class="wp-image-5442 aligncenter" src="https://faq.apprix.fi/wp-content/uploads/2024/02/Picture3-Send-PIN-code.png" alt="" width="346" height="256" />

<strong>Note! Course participants must authenticate within 10 minutes.</strong>

<img class="wp-image-5443 size-full aligncenter" src="https://faq.apprix.fi/wp-content/uploads/2024/02/Picture4-Insert-PIN-Code.png" alt="" width="445" height="337" />
<h4>Pin-code verification</h4>
PIN-code verification can be done using the user’s email or phone number.

The code contains six numbers generated randomly and stored within the user’s session for 5 minutes. Within this time range, the code will not change. The user will receive the same code every time by clicking the <strong>Resend</strong> button until it expires. After that, the system will generate a  new code. Please note that the previous code will not be valid anymore.

The input for number is the regular input field and supports all common text-editing features such as copying, pasting, editing, deleting, etc. When the user inputs six numbers, the verification process will automatically start.

<strong>2) If an account exists but the course participant has forgotten their password</strong>

The course participant clicks on the <strong>Forgot password</strong> link. A pop-up window will appear to recover the account. The course participant fills in their email address and clicks the <strong>Send PIN Code</strong> button. Once the PIN code has been sent to the email address, the course participant enters the code in a new pop-up window. A new password window will open, and the course participant can change their password here. Once the password has been changed, the course will open.

<img class=" wp-image-5444 aligncenter" src="https://faq.apprix.fi/wp-content/uploads/2024/02/Picture5-Recover-account.png" alt="" width="385" height="268" />

<strong>3) The course participant is registered and remembers their password.</strong>

The course participant enters an email address on the registration form and then clicks on the <strong>Next</strong> button. A new window opens. Here, the participant enters a password and clicks the <strong>Continue</strong> button. The course can now start.
<div class="fusion-text fusion-text-180">
<h4>Security Protection</h4>
The system has an internal firewall to detect and prevent suspicious user activity. The firewall used by Apprix includes several layers of protection.