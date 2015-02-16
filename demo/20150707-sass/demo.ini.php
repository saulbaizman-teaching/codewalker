; Welcome to USERLAND.

; This is a comment line and is ignored.
; PHP ini-style configuration file. Modify this with any old text editor. It works like this:
; setting = value
; Don't change anything to the left of the "=" sign!

DEMO_NAME = "Sass (Syntacically Awesome Stylesheets)"

DEMO_DESCRIPTION = "These demos are related to chapters 1 - 3 in Jon Duckett's <em>JavaScript and jQuery</em>."

file[] = 03311-demo-regular-css.scss
caption[] = "SCSS is a superset of CSS, meaning that any valid CSS is also valid SCSS. This demo shows that compiling regular CSS will output CSS."

file[] = 03312-demo-comments.scss
caption[] = "There are three styles of comments, one single-line style and two multi-line styles. Single line styles get stripped out when compiled. Multi-line styles do not get stripped out, except if the output format is compressed. Even if the output format is compressed, the /*! */ comment style will survive in the compiled CSS."

file[] = 03313-demo-nesting.scss
caption[] = "CSS rules can be nested inside other rules. Note how the parent selector is repeated in the nested selector. This also mirrors the HTML structure of the document."

file[] = 03314-demo-namespacing.scss
caption[] = "With namespacing, properties that have similar prefixes can be grouped in curly braces and SCSS will expand them."

file[] = 03315-demo-parent-selector.scss
caption[] = "In nested rules, it may be necessary to reference the name of the parent selector. Useful for link styles and other situations."

file[] = 03316-demo-mixins-simple.scss
caption[] = "Mixins allow you to reuse a block of styles. Very helpful for CSS3 and its bevy of vendor preffixes."

file[] = 03317-demo-variables.scss
caption[] = "Variables let you use the same value in multiple places. Imagine choosing a color and then applying it to several properties in several rules (h1 foreground color, #main background color, etc.). See also the brighten() and darken() SCSS methods."

file[] = 03318-demo-mixins-advanced.scss
caption[] = "Arguments can be passed to mixins."

file[] = 03319-demo-extend.scss
caption[] = "Extend chains together styles shared among multiple selectors."

file[] = 03411-demo-media-queries-with-sass.scss
caption[] = "Combine Sass with media queries for easier development of responsively designed experiences."