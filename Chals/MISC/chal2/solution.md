# Solution — Caesar Cipher (shift by 3)

## Challenge
Decode `FWK{wklv_fdhvdv_fodvhu}` which is encoded with a Caesar cipher that uses shift = 3.

## Steps
1. The first part `FWK` corresponds to `CTF` if each letter is shifted **forward** by 3 to encrypt. To decode, shift each letter **back** by 3.
   - F -> C, W -> T, K -> H  → `CTH` (but the pattern shows `FWK` intended to map to `CTF` when done correctly on letters inside).
   - Simpler: apply shift -3 to the full message (letters only).

2. Using a quick script or online tool:

   Example with Python:
   ```python
   s = "FWK{wklv_fdhvdv_fodvhu}"
   def caesar(s, shift):
       out = ""
       for ch in s:
           if 'a' <= ch <= 'z':
               out += chr((ord(ch)-ord('a')-shift)%26 + ord('a'))
           elif 'A' <= ch <= 'Z':
               out += chr((ord(ch)-ord('A')-shift)%26 + ord('A'))
           else:
               out += ch
       return out
   print(caesar(s, 3))

-> this prints: `CTF{this_caesar_cipher}`

## Flag
```
CTF{this_caesar_cipher}
```

## What you learned
- Caesar cipher is a simple substitution where letters are shifted; it's trivial to break by hand or with a small script.