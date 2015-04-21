; Welcome to USERLAND.

; This is a comment line and is ignored.
; PHP ini-style configuration file. Modify this with any old text editor. It works like this:
; setting = value
; Don't change anything to the left of the "=" sign!

DEMO_NAME = "WordPress Themes"

DEMO_DESCRIPTION = "These files comprise the WordPress theme based on Katie McGuinness' Love Pole Fitness website. The theme is based on a starter theme named underscores."

DEMO_NOTE = "Note: The downloads for this theme point to a single ZIP file that contains all of the theme files. The theme should be placed in \"wp-content/themes\" and activated in the WordPress dashboard."

file[] = style.css
download[] = "cmp3011-theme.zip"
caption[] = "The stylesheet is one of two required theme files. The comments at the top of the file describe the theme in the WordPress theme chooser interface."

file[] = index.php
download[] = "cmp3011-theme.zip"
caption[] = "The index is the other of the two required theme files. If no other templates are matched, the fallback is always index.php. See the WordPress Template Hierarchy for details."

file[] = functions.php
download[] = "cmp3011-theme.zip"
caption[] = "This file is recommended but not required. It contains all user-defined functions specific to the theme. It is customary to keep function definitions in this file and only put HTML and PHP function calls in the other template files. Note that this file has no visual output."

file[] = home.php
download[] = "cmp3011-theme.zip"
caption[] = "We created this file based on an understanding of the WordPress Template Hierarchy. It replaced the default options for displaying content on the homepage."

file[] = header.php
download[] = "cmp3011-theme.zip"
caption[] = "The underscores theme uses its own system to segregate and re-use content. Site-wide header information, for example, is stored in header.php. Some header information, particularly local stylesheets and JavaScript files, is defined dynamically in the cmp3011_scripts() function inside functions.php."

file[] = page.php
download[] = "cmp3011-theme.zip"
caption[] = "All static pages use the page.php template file, in accordance with the WordPress Template Hierarchy."

file[] = content-page.php
download[] = "cmp3011-theme.zip"
caption[] = "In underscores, the page.php file conditionally references the content-page.php file. (If that file is not present, it will look for a file named content.php.)"

file[] = footer.php
download[] = "cmp3011-theme.zip"
caption[] = "Site-wide footer information is stored in footer.php."
