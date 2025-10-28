from funcoes import*

limpar()

clubes = ["Porto","Real Madrid","Chelsea","Barcelona","Bayern Munich","Gil Vicente","Palma de Maiorca", "Paris","Leiria","Leixões"]


#print(clubes[0])
#print(clubes[1])
#print(clubes[2])
#print(clubes[3])
#print(clubes[4])

for i in range(len(clubes)):
  print(f"{i+1} - {clubes[i]}")
(print)
for i in range(len(clubes)-1, -1, -1):
  print(f"{i+1} - {clubes[i]}")

print("\n\n")

for c in clubes:print(c)
print("\n\n")

for c in reversed(clubes):print(c)
print("\n\n\n")

