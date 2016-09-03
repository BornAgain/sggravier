import platform
import sys
import os
from subprocess import Popen

# INIT VAR
osName =  platform.system()
arg = sys.argv[1:]
database = arg[0]
collection = arg[1]
typeImp = arg[2]
filePath = arg[3]

if osName == "Linux" :
	Process = Popen('mongoimport --db %s --collection %s --type %s --headerline --file %s' % (database,collection,typeImp,filePath), shell = True)
	print Process.communicate()
else :
	os.system('mongoimport --db '+database+' --collection'+ collection +'--type'+ typeImp +'--headerline --file'+ filePath)


