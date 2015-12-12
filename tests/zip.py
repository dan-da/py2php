x = [1, 2, 3]
y = [4, 5, 6]
z = [7, 8, 9]
z1 = zip(x, y, z)

z2 = zip(['one', 'two', 'three'], [1, 2, 3])

def print_zip(x):
    for y in x:
        for z in y:
            print z,
    print ''
    
print_zip(z1)
print_zip(z2)
