
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

