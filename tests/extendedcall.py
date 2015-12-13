def sum(a, b):
    return a + b
values = (1, 2)
print sum(*values)


values = { 'a': 1, 'b': 2 }
print sum(**values)


def sum2(a, b, c, d):
    return a + b + c + d

values1 = (1, 2)
values2 = { 'c': 10, 'd': 15 }
s = sum2(*values1, **values2)



def sum3(*values):
    s = 0
    for v in values:
        s = s + v
    return s

print sum3(1, 2, 3, 4, 5)

# This test is not working yet. PHP variadic params are ordered - only.
#
#def get_a(**values):
#    return values['a']
#
#print get_a(a=1, b=2) 
#
