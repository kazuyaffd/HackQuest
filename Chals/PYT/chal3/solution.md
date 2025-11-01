# 🐍 Challenge 3 – Scrambled Flag

## How to Solve
1.  Run the script: `python3 challenge3.py`
      - Output: `_scrF{debCT4mbl3d}`

2. This looks scrambled. Inspect the parts list in the code: `parts = ["_scr", "F{deb", "CT", "4mbl3d}"]`

3. Rearranging the parts in logical order: 
   ```python
   CT + F{deb + _scr + 4mbl3d}
   = CTF{debug_scr4mbl3d}
   ```

## Flag
```c
CTF{debug_scr4mbl3d}
```

## 🎓 What You Learned
- Strings can be split into parts and jumbled.
- By carefully reordering, the original message can be restored.
- Understanding list operations is essential in Python.