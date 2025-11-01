# Challenge 2 — Simple Math Puzzle

## Summary:
Program checks if num * 3 + 5 == 50.

## Steps:
1. Algebraic solve: `num * 3 + 5 = 50 ⇒ num = 15.`
2. Run the binary with the found value:
```
./challenge2
# Enter a number: 15
```
**Expected output:** `You win! FLAG{math_puzzle}`

## 🎓 What You Learned
- Translate simple arithmetic checks in a program into algebraic equations (num * 3 + 5 == 50).
- Use objdump/disassembly to locate numeric constants and recognize comparison patterns (cmp, je/jne).
- Apply quick problem-solving (solve on paper) and validate by running the binary.
- Learn when to use brute force vs analytic solving for small search spaces.
- Introduction to reading low-level instructions that implement arithmetic.
