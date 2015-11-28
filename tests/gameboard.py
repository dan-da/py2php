def mul_string(str, size):
    buf = ""
    for x in range(size):
        buf = buf + str 
    return buf        

def print_horiz_line(size):
    print( mul_string(" --- ", size))

def print_vert_line(size):
    print( mul_string("|    ", size+1 ))

board_size = 6

for index in range(board_size):
    print_horiz_line(board_size)
    print_vert_line(board_size)
print_horiz_line(board_size)