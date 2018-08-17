
def info(text1, text2="World", spacing=10, collapse=False):
    print text1,
    
    if not collapse:
        for i in range(1,spacing):
            print " ",
            
    print text2    
    
info("hello")
info("hullo", "Mars", 12)
info("hey", collapse=True)
info(spacing=15, text1="hello")

kwargs = {"text1": "silly", "text2": "goose"}
info(**kwargs)


class foo(object):
    def __init__(self, text1=None, text2=None, spacing=6, collapse=True):
        if text1 != None:
            self.info(text1, text2, spacing, collapse)        
        
    def info(self, text1, text2="World", spacing=10, collapse=False):
        print text1,
        
        if not collapse:
            for i in range(1,spacing):
                print " ",
                
        print text2
        
    @staticmethod
    def staticinfo(text1, text2="World", spacing=10, collapse=False):
        print text1,
        
        if not collapse:
            for i in range(1,spacing):
                print " ",
                
        print text2    
        

f = foo()

f.info("foo.hello")
f.info("foo.hullo", "Mars", 12)
f.info("foo.hey", collapse=True)
f.info(spacing=15, text1="foo.hello")
f.info(**kwargs)

fg = foo(text1="kwarg constructor", collapse=False)

foo.staticinfo("foo.static.hey", collapse=True)
foo.staticinfo(**kwargs)


class foosub(foo):
    def __init__(self):
        kwargs = {"text1": "foosub", "text2": "says hello"}
        super(foosub, self).__init__(**kwargs)


fs = foosub()