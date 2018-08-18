map = {"fname": "woody", "lname": "woodpecker", "species": "bird", "gender": "male"}

map2 = {}

# python dicts are unsorted, so if we just print inside the foreach
# then php output will differ.
for k,v in map.iteritems():
    map2[k] = v
    
print map2["fname"]
print map2["lname"]
print map2["species"]
print map2["gender"]



map2 = {}
for k,v in map.items():
    map2[k] = v

print map2["fname"]
print map2["lname"]
print map2["species"]
print map2["gender"]

