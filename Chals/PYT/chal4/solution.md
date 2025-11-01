# 🐍 Challenge 4 – Simple Cipher

## How to Solve
1. Run the script: `python3 challenge4.py`
    <br>Output: `[67, 84, 70, 123, 97, 115, 99, 105, 105, 95, 109, 97, 103, 105, 99, 125]`
2. These numbers are ASCII codes. Convert them using Python: 
```python
    cipher = [67, 84, 70, 123, 97, 115, 99, 105, 105, 95, 109, 97, 103,105, 99, 125]
    print("".join(chr(x) for x in cipher))
```
3. Output will be your flag.


## Flag
```c
CTF{ascii_magic}
```

## 🎓 What You Learned
- Characters are stored as numbers (ASCII codes).
- Use chr() to convert codes to characters.
- Understanding encodings helps decode hidden messages.