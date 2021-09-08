def combine_together(d1, d2):

    for i in d2.keys():
        if i in d1:
            d2[i] = d2[i] + d1[i]
          
d1 = {'a': 100, 'b': 200, 'c':300}
d2 = {'a': 300, 'b': 200, 'c':400}
print(combine_together(d1, d2))
print(d2)
# Expected Result: {'a': 400, 'b': 400, 'd': 400, 'c': 300}
