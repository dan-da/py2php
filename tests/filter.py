def is_even(val):
    return True if val % 2 == 0 else False

print filter( is_even, range(1,20) )
