# 🐍 Challenge 6 – Flag in File

## How to Solve
1. Run the script: `python3 challenge6.py`<br>It prints nothing.
2. Inspect the code:
```py
with open("flag.txt") as f:
    data = f.read()
# print(data)
```
The print line is commented.

3. Uncomment the line: `print(data)`
4. Run the code again and it will print the flag.

## Flag
```
CTF{file_reader_pro}
```

## 🎓 What You Learned
- Reading from files in Python uses open().
- Scripts may hide output by commenting it out.
- Always inspect code and check for missing prints.