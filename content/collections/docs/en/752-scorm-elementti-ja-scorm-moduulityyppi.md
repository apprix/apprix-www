---
id: 8d7050e8-e082-4ff9-99aa-021ec43e377f
blueprint: doc
title: '7.52 SCORM element and SCORM module type'
---
You can use the<strong> SCORM element</strong> to embed content in a SCORM zip package file into a module. You can upload SCORM content as a zip file by editing the SCORM element and selecting the file from your device. The SCORM package can be your own or created by other parties.

Like any other element, the SCORM element can be used in a standard module type, but we recommend using only one SCORM element.

The difference between a <strong>SCORM module type</strong> and a standard module type is that you cannot add a non-SCORM element to the SCORM module type.

The intro and finish elements that appear in editing mode are not visible in preview and published modes for the SCORM module type. In other words, the trainee will see only the content of the SCORM zip package file when completing the course.

<strong>Note!</strong> If SCORM element uses a SCORM package created with Builder, the answers and points are recorded in the statistics of the course from which the SCORM package was created. For example, course A in Builder contains a SCORM element. The SCORM element includes a SCORM package created from course B in Builder. The answers and points given in course B inside the SCORM element, are recorded in the statistics of course B.
<h4><strong>Editing Instructions</strong></h4>
<strong>How do you create a module with the SCORM module type?</strong>

We recommend using only one SCORM element in a module that utilises the SCORM module type.
<ul>
 <li>Click the "<strong>Create</strong>" button on the left side of the page. The module type selection window will open.</li>
 <li>Select the "<strong>SCORM</strong>" module type and any desired template.</li>
 <li>Give the new SCORM module a name and click the Save button. The SCORM module is now created.</li>
 <li>Click "<strong>Add element</strong>." Drag the SCORM element between the <strong>intro</strong> and <strong>finish</strong> elements to add it to the new module. Then click the <strong>Save</strong> button.</li>
 <li>Click the <strong>SCORM element</strong>. The element will open.</li>
 <li>Click the "<strong>Select file</strong>" button in the middle of the element. The "<strong>Open</strong>" window will open.</li>
 <li>Select the <strong>SCORM zip package file</strong> and click the "<strong>Open</strong>" button. You will then be notified if the file upload was successful. If the file upload is successful, the content of the SCORM file will be displayed in the SCORM element.</li>
</ul>
<strong>Note:</strong>
<ul>
 <li>In preview and publishing mode, the user is not shown the intro and finish elements of the SCORM module.</li>
 <li>Once the participant has completed the content of the SCORM element, the module will be marked as completed.</li>
 <li>You can add other elements if the selected module does not use the SCORM module type. If the module uses the SCORM module type, only the SCORM element is available in the list of elements.</li>
 <li>When previewing in preview mode a Builder training containing another Builder training embedded in a SCORM element, the embedded Builder training is also previewed in preview mode</li>
</ul>
<strong>Operation and information security of SCORM packages created in Apprix Builder</strong>

Generally, the latest completion data is sent when the user navigates to a different module page. When the user navigates to the final page (which, in practice, is usually the finish element), the course is marked as completed for the current completion. In addition, when a SCORM package is used and the user navigates to the final page, the system, such as an LMS, embedding the Builder course, is notified via the SCORM interface that the course has been completed.

When using a standard SCORM package (also referred to as an Online SCORM package), the content necessary for the course and the code required for the general operation of the Builder courses (including navigation) are loaded from the Builder domain. In addition, the package includes other files needed for the course at the moment of the creation of the package, like the uploaded files used in Builder course and the customer-specific code and its required files. When using a standard SCORM package, completion data is sent to Builder and Apprix statistics.

When using an offline SCORM package, all the data (including content), code, and other required files are included within the package. The offline SCORM package makes requests to the Apprix domain only to send completion data to Apprix statistics, not to  Builder.

Requests made to Apprix domain use the HTTPS protocol to fetch and send data securely.

For further information about the SCORM, please check the Builder's FAQ.

<strong>Zip/ SCORM files:</strong> <a href="/faq">/faq</a>

<h6 class="p1">How do you create a module with the SCORM module type?</h6>

<figure class="doc-image"><img src="/files/docs/2025/04/SCORM-module-creation2-1.gif" alt="" loading="lazy"></figure>