for num in range(1, 11):
    if num == 5:
        continue
    else:
        print(num)
print('Laço encerrado\n\n')

s = 0
for i in range(5):
    s += 3 * i
    print(i)
print(s)
print('\n')

s = 0
a = 1
while s < 5:
      s = 3*a
      a += 1
      print(s)