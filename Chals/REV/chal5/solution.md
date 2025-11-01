# Challenge 5 — Username → Serial relationship

## Summary: 
Program computes sum = sum_of_ascii(username) and expects serial == sum * 2.

## Steps:
1. Inspect binary for helpful messages with `strings`: `strings challenge5 | grep -E "username|serial|Valid|Invalid" -n`
2. Create a keygen or compute serial by hand with Python. Example for username alice:
```
username = 'alice'
serial = sum(ord(c) for c in username) * 2
print(serial)
```
3. Run the program and provide username and computed serial:
```
./challenge5
# Enter username: alice
# Enter serial: <computed_serial>
```

**Expected Output:** `Valid serial! FLAG{keygen_ready}`

4. (Optional) Write a small keygen script that accepts username and prints the correct serial:
```py
#!/usr/bin/env python3
import sys
if len(sys.argv)<2:
print("Usage: keygen.py <username>")
sys.exit(1)
username = sys.argv[1]
print(sum(ord(c) for c in username)*2)
```

## 🎓 What You Learned
- Follow data flow: how input is transformed (sum of ASCII) and validated (multiplied by 2).
- Reconstruct algorithms from code/disassembly and re-implement them outside the binary.
- Write tiny keygen scripts in Python to generate valid inputs programmatically.
- Understand the concept of algorithmic reversals vs brute force.
- Practise end-to-end verification: produce input → run binary → confirm flag.