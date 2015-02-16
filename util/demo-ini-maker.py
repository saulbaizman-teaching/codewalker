#!/usr/bin/python
# Print files in current directory and spit out demo.ini.php file.

import os


# here document
print '''
; Welcome to USERLAND.

; This is a comment line and is ignored.
; PHP ini-style configuration file. Modify this with any old text editor. It works like this:
; setting = value
; Don't change anything to the left of the "=" sign!

DEMO_NAME = ""

DEMO_DESCRIPTION = ""
'''

files = os.listdir('.')

for myfile in files:
	print '''\
file[] = %s
demo[] = ""
	''' % (myfile)

