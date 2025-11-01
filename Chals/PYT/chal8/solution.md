# 🐍 Challenge 8 – Hidden Function

## How to Solve
1. Run the script: `python3 challenge8.py`<br>Nothing happens.
2. Inspect the code:
```py
    def hidden():
        return "CTF{func_ninja_skills}"
```
3. The function is never called.<br>Run Python interactively:
```py
    >>> python3
    >>> from challenge8 import hidden
    >>> hidden()
    'CTF{func_ninja_skills}'
```

## Flag
```c
CTF{func_ninja_skills}
```

## 🎓 What You Learned
- Functions must be called to return values.
- You can import and use functions from other Python files.
- Hidden functionality often requires exploration.