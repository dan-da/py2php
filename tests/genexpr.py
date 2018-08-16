print sum(x * 2 for x in [1,2,3])

print sum( (x * 2 for x in range(10)) )
print sum(x * 2 for x in range(10))

for x in ('Bom dia ' + str(i) for i in range(3)):
    print(x)

for y in (x for x in "abc"):
    print y

print sum(x for x in range(4) if x % 2 == 0)

print sum(x for x in range(4) if x % 2 == 0
            for y in range(8) if y % 2 != 0
            for z in range(16) if z % 3 == 0)


print sum(x**2 for x in range(10))

# single conditional
print sum(x**2 for x in range(10) if x % 2 == 0)

# nested for
for a in ([x, y, z] for x in [1,2,3] for y in "abc" for z in "xyz" ):
    print a

# nested for with conditional
for a in ([x, y] for x in [1,2,3] for y in [3,1,4] if x != y):
    print a

# nested conditionals
for a in ([y,z] for y in range(100) if y % 2 == 0 if y % 5 == 0 for z in "ab"):
    print a


# nested list comprehension
matrix = [ [1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12] ]

# this presently fails because matrix is defined outside generator function.
for x in ( (row[i] for row in matrix) for i in range(4)):
    for y in x:
        print y

# this presently fails because i is defined in generator function 1, and row[i]
# is used in generator function 2, where i is undefined.
for x in ( (row[i] for row in [ [1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12] ]) for i in range(4)):
    for y in x:
        print y


    

