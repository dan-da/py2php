a = [0,1,2,3,4,5,6,7,8,9]

# regular slice  ( Ast.Slice )
print a[:2]
print a[2:]
print a[3:5]
print a[:]

# slice with step.  ( Ast.Sliceobj )
print a[2:9:]
print a[2:9:3]
print a[::3]
print a[::]
print a[1::]
print a[:1:]
print a[::1]
