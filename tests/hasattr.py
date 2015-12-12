class foo:
    
    def __construct(self):
        self.bar = "hey"
        
    def talk(self):
        pass
    

f = foo()
print hasattr( f, "bar" )
print hasattr( f, "talk" )