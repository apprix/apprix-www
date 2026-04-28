---
id: e85ddbfa-4a53-4098-84f1-42de0faab850
blueprint: doc
title: '8.2 User Authentication'
---
<div class="fusion-text fusion-text-180">

Below, you may find the user authentication methods for identifying course participants (trainees) that have already been implemented to be integrated with Builder.

If you wish to inquire about a possible implementation in your organization’s Builder client environment, please contact your <strong><a href="https://apprix.fi/builder-help-en/?preview_id=3022&amp;preview_nonce=f2a7c5a336&amp;_thumbnail_id=-1&amp;preview=true#contact">Apprix contact/Account manager.</a></strong>

In the <b>User Authentication settings</b> you can choose the module’s authentication method.

Below a list of possible authentication methods:

<b>No user authentication</b>
<ul>
 <li aria-level="1">Allows the trainee to enter in the course without logging in with any of Builder’s login methods.</li>
 <li aria-level="1">Anyone with the link can access the module.</li>
 <li aria-level="1">Most often used when the module contains a login element inside it, or when the module can be done anonymously and does not contain sensitive information.</li>
</ul>
<b>Email registration </b>(previously "Personal passwords")
<ul>
 <li aria-level="1">Allows the trainee to register to Builder and create a username and password.</li>
 <li aria-level="1">The same username and password can be used for all modules (with Email registration option switched on) after registration.</li>
 <li aria-level="1">Requires the trainee to use a valid and unique email address (or phone, if enabled).</li>
 <li aria-level="1">Most often used for external trainees and blue collar employees.</li>
</ul>
<b>MyCourses LMS Sign-On</b>
<ul>
 <li aria-level="1">Allows access to the module from Apprix MyCourses LMS.</li>
 <li aria-level="1">Requires the trainee to log in to MyCourses first with the allowed login methods configured for your organization.</li>
 <li aria-level="1">Used when the module is placed inside MyCourses as a course’s language module.</li>
</ul>
<b>Sympa ID check</b>
<ul>
 <li aria-level="1">Users must enter their Sympa ID, Local ID, first name and last name.</li>
 <li aria-level="1">IDs must be found in the system, and names must match the IDs’ information.</li>
</ul>
<b>Flexim tag reader</b>
<ul>
 <li aria-level="1">Trainees can log in using their Flexim tag on a tag reader.</li>
 <li aria-level="1">If a Flexim tag reader isn’t available, trainees can choose to log in using their employee ID, first name and last name.</li>
 <li aria-level="1">If using employee ID, it must be found in the system and the names must match the ID’s information.</li>
</ul>
<b>Single Sign-On (SSO)</b>
<ul>
 <li aria-level="1">Allow trainees to automatically log in with their company credentials.</li>
 <li aria-level="1">Requires the participants to have credentials in your internal system (e.g. Active Directory, Google Workspace).</li>
 <li aria-level="1">Most often used for internal (white collar) employees.</li>
</ul>
<b>Tax number check (vero.fi)</b>
<ul>
 <li aria-level="1">Trainees enter their tax number, first name, last name and birth date.</li>
 <li aria-level="1">Tax number must be found in the Finnish public tax number register. Please note that not all Finnish tax numbers are in the register - they must be added to the public register by the person or their employer.</li>
 <li aria-level="1">The first name, last name and birthdate must match the tax number’s information. Middle names are allowed instead of first names, and three typos are also allowed in the names.</li>
 <li aria-level="1">Used when the company requires workers’ tax numbers in the public register.</li>
</ul>
<b>IP Guard</b>
<ul>
 <li aria-level="1">Allows access only if the trainee is entering from a specific IP range.</li>
 <li aria-level="1">Most often used when a VPN is in use in your organization, to allow access only if trainees are logged in to the VPN first.</li>
 <li aria-level="1">In some cases also used to restrict access only to a specific location, e.g. a factory or office building. Please refer to your Builder instructions if this is the case.</li>
 <li aria-level="1">In some cases also used to identify whether or not to direct the user to Single Sign-On. Please refer to your Builder instructions if this is the case.</li>
</ul>

<h6 class="p1"><b>Click on the images to enlarge them.</b></h6>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2022/03/User_authentication-1-400x396.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="https://faq.apprix.fi/wp-content/uploads/2022/03/Select_Domains-1-400x223.png" alt="" loading="lazy"></figure>