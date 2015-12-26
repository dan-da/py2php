exec ("""a = '5'
b = "6"
c = 7
""")

print a

exec( 'd = 8' )

exec( 'print c + d' )


def myfunc(a,b):
    print a+b

code = 'myfunc(1,6);'
exec(code)

f = 'func'
exec( 'my' + f + "(2,4);" )


