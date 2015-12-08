a = True
b = 'Sally' if a else 'Mary'

c = 1+2 if a else 3 + 4

d = (1+2 if a else 3 + 4) if ('Sally' if a else 'Mary') else 'Other'

print b,c,d
