# 🐍 Challenge 5 – Base64 Twist

## How to Solve
1. Run the script: `python3 challenge5.py`
    <br>Output: `Q1RGe2VuY29kaW5nX3N1cGVyc3Rhcg==`
2. This is Base64. Decode it using Python:
```python
    import base64
    encoded = "Q1RGe2VuY29kaW5nX3N1cGVyc3Rhcg=="
    print(base64.b64decode(encoded).decode())
```
3. Output will be your flag

## Flag
```
CTF{encoding_superstar}
```

## 🎓 What You Learned
- Base64 is a common encoding format.
- Tools (Python, CyberChef, Linux base64 command) can decode it.
- Recognizing Base64 is a useful skill in CTFs.