import os

push = input("Yakin mau Commit? y/n ")
if push == "y":
    os.system("git add .")
    print()
    os.system("git commit -m 'update mvl'")
    print()
    os.system("git push")
    print()
    print("Selesai")

else:
    print("membatalkan Commit")