
class gabby:
    @staticmethod
    def talk(arg):
        print arg


def talk(arg):
    print arg

def talk2(arg1, arg2):
    print arg1, arg2

l = [1,2,3,4,5,6]
l2 = ['a', 'b', 'c']

map(talk, l)
map(talk2, l, l2)

map(gabby.talk, l2)

g = gabby()
map(g.talk, l2)

def add(arg1, arg2):
    if arg1 == None or arg2 == None:
        return None
    return arg1 + arg2

print map(add, [1,2,3,4,5], [1,2,3,4,5,6,7,8])



