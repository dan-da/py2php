import os

f_in = open('file.py')
outfile = '/tmp/file.py.test'
f_out = open(outfile, 'w')

lines = f_in.readlines()
f_out.writelines(lines[:4])

print f_out.closed

f_in.close()
f_out.close()

print f_out.closed

print "---"

f_iter = open('/tmp/file.py.test')

for line in f_iter:
    print line ,

print "---"
    
f_iter.seek(20)
print f_iter.read(10)

os.remove( outfile )