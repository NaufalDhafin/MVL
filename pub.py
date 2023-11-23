import os

publish = input("Beri nama untuk publish : ")
os.system("git add .")
os.system(f"git commit -m '{publish}'")
os.system("git push")
print()

print(f"{publish} -> Selesai di Publish")