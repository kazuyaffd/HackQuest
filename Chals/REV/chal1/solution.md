# Challenge 1 — String Comparison

## Summary: 
Binary compares input string with "hello123". When correct it prints the flag.

## Steps:
1. Run quick file checks: `file challenge1`<br>
`strings challenge1 | grep -i hello || true`

**Expected:** you will see hello123 in the strings output.

2. Run the binary and supply the discovered password:
`./challenge1` <br> `Enter password: hello123`


**Expected output:** `Correct! FLAG{hello_string}`

## 🎓 What You Learned
- Recognize and extract plaintext from binaries using strings.
- Understand how programs compare input with hardcoded values (strcmp).
- Run and test binaries interactively to confirm behavior.
- Distinguish between data embedded in a binary vs runtime output.
- Basic safe I/O handling (how scanf/printf appear in output).
- Confidence-building: quick-win reversing workflow (inspect → run → confirm).