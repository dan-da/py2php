
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


class foo:
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

foo.staticinfo("foo.static.hey", collapse=True)



