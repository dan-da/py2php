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


    

