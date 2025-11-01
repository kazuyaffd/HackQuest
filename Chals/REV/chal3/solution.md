# Challenge 3 — XOR-Obfuscated Password

## Summary: 
Password "flag123" is XOR-encoded in the binary as bytes {27,6,4,0,3,75} and decoded at runtime with key 75.

## Steps:
1. Inspect strings first (may not reveal encoded password): `strings challenge3 | head -n 50`<br>
Likely you will not see the password because it is encoded.
2. Find the encoded byte sequence using `xxd` or `objdump -s`: `xxd -p challenge3 | tr -d '\n' | sed 's/../& /g' | grep -n "1b 06 04 00 03 4b` <br> or dump the entire file and visually search for `1b060400034b` sequence

3. Decode with Python using `XOR` key 75 (0x4B):
```py
data = bytes([27,6,4,0,3,75])
print(bytes(b ^ 75 for b in data))
```
Expected printed value: `b'flag123'`.

4. Run the binary and supply the decoded password:
```
./challenge3
# Enter password: flag123
```

**Expected output:** `Access Granted! FLAG{xored_flag}`


## 🎓 What You Learned
- Spot encoded/obfuscated data in a binary (not visible with strings).
- Use hex tools (xxd, hexdump) to extract byte sequences.
- Write small Python decoders (XOR decode) to recover hidden strings.
- Understand simple encoding/decoding routines and where they run at runtime.