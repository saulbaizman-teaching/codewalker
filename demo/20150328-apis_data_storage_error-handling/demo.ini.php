
; Welcome to USERLAND.

; This is a comment line and is ignored.
; PHP ini-style configuration file. Modify this with any old text editor. It works like this:
; setting = value
; Don't change anything to the left of the "=" sign!

DEMO_NAME = "APIs, Data Storage, and Error Handling"

DEMO_DESCRIPTION = "In these examples we look at the Google Maps API, data storage through HTML5 APIs and Firebase, and advanced error handling with exceptions. <em>Note: to make the demos work, they must be run on a web server.</em>"

file[] = 1010.html
download[] = ""
caption[] = "[Client-side Databases] Sessions storage via the sessionStorage object. Data stored in session storage is retained only for the lifetime of the given tab/window. It's good for info that changes frequently and is personal and should not be used by other users of the device."

file[] = 1011.html
download[] = ""
caption[] = "[Client-side databases] Local Storage via the localStorage object. Data stored in local storage is retained more or less permanently. It's good for information that should be stored outside of the browsing session or reused at a later time."

file[] = 10120.html
download[] = ""
caption[] = "[Client-side databases] Write information to a Firebase database using its API methods. <em>Note: the Firebase database name must be entered for the demo to work for you.</em>"

file[] = 10121.html
download[] = ""
caption[] = "[Client-side databases] Retrieve and show information from a Firebase database using its API methods. <em>Note: the Firebase database name must be entered for the demo to work for you.</em>"

file[] = 10122.html
download[] = ""
caption[] = "[Client-side databases] Update information in a Firebase database using its API methods. Nothing will appear in the webpage itself, but if you're viewing the Firebase dashboard, you should see the information change. <em>Note: the Firebase database name must be entered for the demo to work for you.</em>"

file[] = 1020.html
download[] = ""
caption[] = "[Google Maps] A simple Google Map using the Google Maps API. Every map needs at a minimum center and zoom properties."

file[] = 1021.html
download[] = "1021.zip"
caption[] = "[Google Maps] A more advanced Google Map. This one contains a custom marker and custom content in a dialog when the marker is clicked."

file[] = 1030.html
download[] = ""
caption[] = "[Exceptions] This file with trigger an exception and halt the execution of the script. The reason for the exception is dividing by a variable that has not been declared or defined."

file[] = 1031.html
download[] = ""
caption[] = "[Exceptions] The try / catch / finally block provides a way to gracefully recover from errors."

file[] = 1032.html
download[] = ""
caption[] = "[Exceptions] We're using a catch block to provide a default value for the undeclared variable. Our script continues to process even after encountering the error."

file[] = 1033.html
download[] = ""
caption[] = "[Exceptions] Create your own exceptions using the Exceptions object."
