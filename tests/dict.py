a = dict(one=1, two=2, three=3)
b = {'one': 1, 'two': 2, 'three': 3}
c = dict(zip(['one', 'two', 'three'], [1, 2, 3]))
d = dict([('two', 2), ('one', 1), ('three', 3)])
e = dict({'three': 3, 'one': 1, 'two': 2})
f = dict()

def print_dict(d):
    print d["one"], d["two"], d["three"]

print_dict(a)
print_dict(b)
print_dict(c)
print_dict(d)
print_dict(e)

print a == b == c == d == e
