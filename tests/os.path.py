import os.path

dir = os.path.realpath('.')

print os.path.isdir(dir)
print os.path.isfile(dir)
print os.path.islink(dir)
print os.path.split(dir)[0], os.path.split(dir)[1]

print os.path.join( '/' + os.path.split(dir)[0] + '/', os.path.split(dir)[1] )

path = os.path.abspath('./os.path.py' )
print path

print os.path.basename(path)

print os.path.commonprefix([dir, path])

print os.path.dirname(path)

print os.path.exists(path)
print os.path.expanduser('~/Desktop')

print os.path.expandvars('$HOME, $SHELL, ${HOME}, ${SHELL}')

print int(os.path.getatime(path))
print int(os.path.getmtime(path))
print int(os.path.getctime(path))
print os.path.getsize(path)

print os.path.isabs(path)
print os.path.isfile(path)
print os.path.normcase(path)
print os.path.realpath(path)
print os.path.samefile(path, path)

parts = os.path.splitext(path)
print parts[0], parts[1]



















