# Challenge 4 — Per-character conditions

## Summary:

Binary checks each character of a 5-character password with simple arithmetic relationships. Conditions in source:
```
input[0] + 1 == 'b'  -> input[0] == 'a'
input[1] - 2 == 'c'  -> input[1] == 'e'
input[2] * 2 == 200  -> input[2] == 100 (ASCII 'd')
input[3] == 'X'
input[4] == input[0] + 3  -> input[4] == 'a' + 3 == 'd'
```

## Steps:
1. If you have the source, read it. If not, disassemble and search for `cmp/add/mul` operations related to character checks: `objdump -d challenge4 | less` <br>search for comparisons (cmp) and character constants (e.g. 'b', 'c', 200)

2. Translate each condition to an actual character (see summary above), resulting password: `aedXd`.

3. Run the binary with that password: `./challenge4` <br> Enter 5-character password: `aedXd`

**Expected output:** Correct Password! FLAG{loop_check}


## 🎓 What You Learned
- Translate per-byte/character arithmetic back to ASCII characters (e.g., input[0]+1 == 'b').
- Follow simple loop and conditional structures in disassembly (character checks across indices).
- Apply ASCII arithmetic and small numeric reasoning to reconstruct passwords.
- Use objdump/gdb to step through character-by-character validation.