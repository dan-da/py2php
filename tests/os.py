import os

name = '/tmp/os.py.test1'

fd = os.open(name, os.O_WRONLY|os.O_CREAT)

os.write(fd, "Hello from python os module.")

os.close(fd)

info = os.stat(name)

print "size of file " + name + " is " + str(info.st_size) + " bytes"

linkname = '/tmp/os.py.test2'
os.symlink( name, linkname )

fd = os.open(linkname, os.O_RDONLY)

buf = os.read(fd, 1000)

os.close(fd)

print buf

os.unlink(linkname)
os.unlink(name)




