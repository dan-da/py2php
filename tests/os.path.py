import os.path

dir = os.path.realpath('.')

print os.path.isdir(dir)
print os.path.isfile(dir)
print os.path.islink(dir)
print os.path.split(dir)[0], os.path.split(dir)[1]

print os.path.join( '/' + os.path.split(dir)[0] + '/', os.path.split(dir)[1] )




