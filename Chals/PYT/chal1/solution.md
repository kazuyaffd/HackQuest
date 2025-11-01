# 🐍 Challenge 1 – Buggy Code

## How to Solve
1. Open the script `challenge1.py` in an editor.  
2. Notice the line:
   ```python
   if flg = "CTF{syntax_fixed_it}": 
    ```
    This uses = instead of ==, which is invalid syntax.
3. Fix it either by:
    - Replacing = with ==, or
    - Removing the if entirely and just printing flg.
4. python3 challenge1.py

## Flag
```c
CTF{syntax_fixed_it}
```

## 🎓 What You Learned
- Python uses = for assignment and == for comparison.
- Debugging syntax errors is an important skill.
- Small bugs can hide the correct logic.