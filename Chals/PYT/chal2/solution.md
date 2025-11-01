# 🐍 Challenge 2 – Wrong Output

## How to Solve
1. Open `challenge2.py`.  
2. The script defines two variables:
   ```python
   secret = "CTF{vars_can_be_tricky}"
   fake = "CTF{wrong_way}" 
   ```
   But prints fake instead of secret.
3. Fix the code to: `print(secret)`
4. Run the script: `python3 challenge2.py`

## Flag
```c
CTF{vars_can_be_tricky}
```

## 🎓 What You Learned
- Variables store data, but the correct one must be used.
- Code may try to mislead by using decoy variables.
- Always check what’s being printed.