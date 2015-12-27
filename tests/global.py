g1 = 'hello'
g2 = 'world'

def hello():
    global g1, g2
    print "hello()", g1, g2


class foo:
    def hello(self):
        global g1, g2
        print "foo::hello()", g1, g2

hello()

f = foo()
f.hello()



def test_globals_builtin():
    g_scope = globals()
    print "via globals() builtin: ", g_scope["g1"], g_scope["g2"]
    
test_globals_builtin()
