def find(ordered_list, element_to_find):
  for element in ordered_list:
    if element == element_to_find:
      return True
  return False
  
l = [2, 4, 6, 8, 10]
print(find(l, 5)) # prints False
print(find(l, 10)) # prints True
print(find(l, -1)) # prints False
print(find(l, 2)) # prints True
