---
id: 5bcffc17-1a71-41a7-8c2d-32f0be76fa30
origin: 1bc7fb6c-fbba-4b0c-8119-b7a33a2e10b0
title: 'The SCORM file does not load in Moodle. I investigated the matter further and noticed that the index.html file does not open in a local browser.'
answer: '<p>This is because the SCORM package is not designed to work locally — it requires a web-based LMS system (such as Moodle) to function. When the SCORM package is opened directly in a local browser, error messages appear in the browser''''s developer console.</p><p>For the SCORM package to be used correctly in a training, the User Authentication setting must be set to "No user authentication". After this, the package should work in Moodle as expected.</p><p>Instructions: Changing the User Authentication setting</p><ul><li>Open the module''''s Edit module view.</li><li>Click the gear icon at the top and select User Authentication…</li><li>In the User Authentication Settings window that opens, verify that the "No user authentication" method is selected.</li><li>If any other authentication method is active, disable it.</li></ul>'
---
