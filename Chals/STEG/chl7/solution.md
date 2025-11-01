# Challenge 7 – Zero-Width Characters

## 📝 How to Solve
1. Download the text file. At first glance it looks normal.  
2. Because the message is encoded using **zero-width Unicode characters** (e.g., U+200B ZWSP, U+200C ZWNJ), you need a decoder:
   - Paste the file content into an online zero-width decoder Link: https://330k.github.io/misc_tools/unicode_steganography.html.
   - Or run given Python script to map zero-width characters back to bits/bytes.

3. The decoded hidden text reveals the flag.

## Flag: 
```
CTF{zero_width_secret}
```


## 🎓 What You Learned
- Invisible Unicode characters (zero-width space, zero-width non-joiner) can hide binary data inside normal-looking text.  
- Special decoders or scripts are required to extract the hidden content.  
- This is a common text steganography technique.