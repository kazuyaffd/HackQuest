# Solution — Base Decode

## Challenge
Decode the Base64 string `Q1RGe3RoaXNfYmFzZTY0X2ZsYWd9` to reveal the flag.

## Steps
The string is Base64. Use any decoder:
   - Command line:
     ```bash
     echo 'Q1RGe3RoaXNfYmFzZTY0X2ZsYWd9' | base64 --decode
     ```
   - Or use an online Base64 decoder.

## Flag
```
CTF{this_base64_flag}
```


## What you learned
- Base64 is an encoding that’s easy to detect (characters A–Z, a–z, 0–9, +, / and = padding).
- Many tools (CLI and web) can decode it.
