
; Welcome to USERLAND.

; This is a comment line and is ignored.
; PHP ini-style configuration file. Modify this with any old text editor. It works like this:
; setting = value
; Don't change anything to the left of the "=" sign!

DEMO_NAME = JavaScript 2

DEMO_DESCRIPTION = "These demos are related to chapters 4 - 6 in Jon Duckett's <em>JavaScript and jQuery</em>."

file[] = 0001.html
caption[] = "[CONDITIONALS] An if( ) statement."

file[] = 0002.html
caption[] = "[CONDITIONALS] An if-else statement."

file[] = 0003.html
caption[] = "[CONDITIONALS] An if-else if-else statement."

file[] = 0004.html
caption[] = "[CONDITIONALS + LOGICAL OPERATORS] An if statement combined with the && (and) logical operator. Multiple conditional expressions should be grouped in parentheses."

file[] = 0005.html
caption[] = "[CONDITIONALS + LOGICAL OPERATORS] An if statement combined with the || (or) logical operator."
	
file[] = 0006.html
caption[] = "[CONDITIONALS + LOGICAL OPERATORS] Another if statement with the || (or) logical operator. The conditions are evaluated from left to right. When one expression evaluates to true, the code block is executed. Otherwise the next condition is evaluated."

file[] = 0007.html
caption[] = "[CONDITIONALS + LOGICAL OPERATORS] Another if statement with the && (and) logical operator. All of the conditions must be met for if( ) the code block to be executed, otherwise the else{ } block is executed."
	
file[] = 0008.html
caption[] = "[CONDITIONALS + LOGICAL OPERATORS] Using the ! (not) logical operator. The operator inverts, or reverses, the outcome of the conditional expression. Eg., true becomes false, and false becomes true."

file[] = 0008b.html
caption[] = "This was an in-class challenge."

file[] = 0009.html
caption[] = "The same response to the in-class challenge with an else statement."

file[] = 0010.html
caption[] = "[CONDITIONALS] A switch statement, which can more easily accommodate multiple if-then statements."

file[] = 0011.html
caption[] = "[LOOPS] An extensive example and explanation of a for( ) loop. There's also an excellent diagram on page 172-173 in the Duckett book. There are also examples of more assignment operators (+= -= /= *=) and incremental operators (++ --). There is also a modulo operator, which returns the remainder of two numbers divided together (5%2 would be 1)."

file[] = 0012.html
caption[] = "[LOOPS] A while( ) loop in action. If the condition is true, the code block will execute. If the condition is false, the loop ends."

file[] = 0013.html
caption[] = "[LOOPS] A do-while loop. The difference between a while loop and a do-while loop is a do-while loop always run the code block at least once, even if the condition is false."

file[] = 0014.html
caption[] = "[DOM] To manipulate the Document Object Model, it is common practice to select the element you want to manipulate, then get or set the value of that element. The method document.getElementById( ) selects an HTML element based on the value of itsID attribute."

file[] = 0015.html
caption[] = "[DOM] Use the .textContent property to get the text content of an element. Other properties are also available for similar ends: innerText and innerHTML. Avoid using innerText; innerHTML has security implications enumerated in the Duckett book."

file[] = 0016.html
caption[] = "[DOM] The .textContent property can also be used to set the text content of an element."

file[] = 0017.html
caption[] = "[DOM] The setAttribute( ) method can be used to change the attributes of an element. In this example, the class is changed from 'blue' to 'red', which changes the background color of the element based on the CSS styles."

file[] = 0018.html
caption[] = "[EVENTS] Events are like hooks on which to hang your code, and when something happens (eg., a user clicks a link, the browser window is resized, etc.), the code will be executed. There are three ways to implement events. The most flexible way is an event listener. The addEventListener( ) method can attach to an element and specify what code to execute when a given event occurs."
