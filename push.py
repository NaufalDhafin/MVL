import os

push = input("Yakin mau Commit? y/n ")
commit = input("Nama untuk Commit? ")
if push == "y":
    os.system("git add .")
    print()
    os.system(f"git commit -m '{commit}'")
    print()
    os.system("git push")
    print()
    print("Selesai")

else:
    print("membatalkan Commit")