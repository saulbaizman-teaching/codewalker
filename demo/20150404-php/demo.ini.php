
; Welcome to USERLAND.

; This is a comment line and is ignored.
; PHP ini-style configuration file. Modify this with any old text editor. It works like this:
; setting = value
; Don't change anything to the left of the "=" sign!

DEMO_NAME = "PHP: PHP Hypertext Preprocessor"

DEMO_DESCRIPTION = "These demos illustrate some basic functionality of the PHP server-side scripting language. The functionality that is highlighted was chosen for its syntactic similarity to JavaScript."

DEMO_NOTE = "Note: for the demo files to work properly, they must be run on a web server with PHP support (such as Apache)."

file[] = 1100.php
download[] = ""
caption[] = "PHP encapsulates its code betwen start and end tags, &lt;?php and ?&gt; respectively. The phpinfo( ) function outputs a ton of diagnostic information."

file[] = 1101.php
download[] = ""
caption[] = "The print( ) function prints strings on a webpage. Note that you can have a lot of whitespace around your PHP code."

file[] = 1102.php
download[] = ""
caption[] = "Comments are identical to those in JavaScript. PHP has both single and multi-line comments. PHP comments cannot be seen in a web browser."

file[] = 1103.php
download[] = ""
caption[] = "Create variables in PHP by prepending a \"$\" character and a name and then assigning it a value."

file[] = 1104.php
download[] = ""
caption[] = "When a programmer makes a syntactic error, PHP will not process any of the script and will instead report a \"parse error.\" PHP usually provides a brief explanation of the cause of the error, the file the error occurred in, and the line number. Here, the prit( ) function on line 8 does not exist."

file[] = 1105.php
download[] = ""
caption[] = "PHP uses lists, called arrays, extensively. Here are some common operations using numerically-indexed arrays."

file[] = 1106.php
download[] = ""
caption[] = "PHP also has associative arrays which use key/value pairings. They're more intuitive to use than numerically-indexed arrays."

file[] = 1107.php
download[] = ""
caption[] = "Conditional statements are nearly identical to JavaScript's syntax. The only difference is \"elseif\" instead of \"else if\"."

file[] = 1108.php
download[] = ""
caption[] = "PHP also supports 'for' and 'while' loops."

file[] = 1109.php
download[] = ""
caption[] = "User-defined functions are ubiquitous in PHP. They allow you to package snippets of code and re-use them."

file[] = 1110.php
download[] = ""
caption[] = "There are a number of special arrays, called superglobals, whose properties are accessible in every PHP script. This example uses the $_SERVER array to glean the browser name and operating system of the website's visitor."

file[] = 1111.php
download[] = ""
caption[] = "PHP excels at processing web form submissions. Once it receives the data, it can be stored in a server-side database, manipulated, emailed, etc."

file[] = 1112.php
download[] = ""
caption[] = "PHP has many features that can be executed dynamically, or on-the-fly, such as creating and manipulating images. This examples dynamically creates a PNG file."

file[] = 1113.php
download[] = ""
caption[] = "Here we've combined the idea of passing arguments via the URL query string to dynamically generate different messages inside our dynamically generated PNG image."

