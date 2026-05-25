---
id: eea55968-55c7-4b37-a2fc-98a9895f4905
blueprint: doc
title: '7.49 Phrases'
---
<strong>Phrases</strong> is a task element in which the user drags buttons containing words in the correct order from the upper (initial) box to the lower one below it. A draggable button can include one or more words, and some buttons can be incorrect or not belong in the phrase.

After the user has transferred the necessary buttons to the lower box, s/he clicks the forward button on the right side to check whether s/he has entered the sentence correctly. The initial box is replaced by an answer box (red if the answer is wrong, green if it is correct), where the user receives feedback. The correct sentence appears in the lower box.

If the answers are 100% correct, the <strong>OK icon</strong> will appear. If the answer is incorrect, the <strong>Not OK icon</strong> will appear.

<strong>Here are some ideas on when to use this element:</strong>
<ul>
 <li>build the company's mission or vision statement</li>
 <li>jobs that require exact phraseology, e.g. radio comms.</li>
</ul>
<h4><strong>Editing instructions </strong></h4>
Add a background image to the element that supports the topic at hand.

Click on <strong>Element Settings</strong> from the orange wheel icon at the top of the element's edit view.

Add the necessary buttons in the <strong>Element Settings</strong> window. The buttons will appear on the right side of the element.

Give the buttons names in logical order, e.g. "<em>A Code of Conduct</em>", "<em>is a set of values</em>", "<em>and principles</em>", "<em>that guide</em>", "<em>an organisation</em>."

If necessary, add incorrect items below the last correct one. For example, in this case, "<em>A Code of behaviour "is a set of laws" </em>and<em> "that run</em>". In this example, the user should match the words that make up the following sentence: "<em>A Code of Conduct is a set of values and principles that guide an organisation</em>."

Turn on the <strong>Shuffle</strong> function. If the function is not activated, the draggable buttons will appear in the same order in the initial box.

Click the move forward button. The green answer box will appear when you click it. Write the answer text here, providing more information about the correct phrase. The exact text will be visible also on the other red side.

In the left upper text box, give information about the phrase in question and the instructions for the participants, for example:

"<em>Drag the buttons on the upper right to the box below in the correct order. Click the forward button when you are done to view the result."</em>

You can adjust the task difficulty by clicking the <strong>wrench tool icon</strong> at the top left corner. The <strong>Phrase element settings</strong> will then open.

If the option “<em>Allow only the right number of words to be dragged</em>” is activated in the Phrase element settings, the correct number of buttons will be displayed at the bottom right of the window. If the option is not selected, the move forward button will be displayed after moving the first button to the lower box.

<strong>Checking logic</strong>

The element calculates the percentage of correctness of the task (0-1, 1 = 100%). A percentage is entered in the statistics. The percentage is multiplied by the number of points assigned to the element to give the score obtained for the element.

The percentage is calculated by looking at three things:
<ul>
 <li>How many correct words the user has chosen</li>
 <li>How many incorrect words the user has chosen</li>
 <li>Whether the whole phrase is in the correct order.</li>
</ul>
The <strong>Normal</strong> option checking logic:
<ul>
 <li>If the whole phrase is correct, the task is 100% correct.</li>
 <li>If there are any errors in the answer (wrong order, too few or too many words chosen), the user is given 50% of the maximum points.</li>
 <li>From this 50%, a percentage is deducted for each wrong word dragged.</li>
 <li>From this 50%, each wrongly selected word is reduced by the percentage used to multiply the maximum score of the element.</li>
 <li>The proportional percentage for one wrong word is the same as for one right word, i.e. one wrong word reduces the same percentage as one correct word.</li>
</ul>

<h6 class="p1"><b>The element in Published mode</b></h6>

<h6 class="p1">Element in Edit mode</h6>

<h6 class="p1"><b>The element settings in Edit mode</b></h6>

<figure class="doc-image"><img src="/files/docs/2024/12/Phrases-element-demo-1.gif" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2024/12/Phrases-element-settings-image-1.png" alt="" loading="lazy"></figure>

<figure class="doc-image"><img src="/files/docs/2024/12/Phrase-asetukset-1.png" alt="" loading="lazy"></figure>