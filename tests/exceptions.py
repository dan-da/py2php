class ZeroDivisionException(Exception):
    pass

class ValidationException(Exception):
    pass

try:
    print 'hi'
except ZeroDivisionError:
    pass

def div(x,y):
    try:
        if x < 0 or y < 0:
            raise ValidationException
        
        if y == 0:
            raise ZeroDivisionException
        
        result = x / y
        
    except ZeroDivisionException:
        print "division by zero!"
    except ValidationException:
        print "Values must be greater than 0!"
#   else clause not supported in PHP or py2php
#    else:
#        print "result is", result
    finally:
        print "executing finally clause"
        
div(-1,3)
div(4,0)
div(0,4)
