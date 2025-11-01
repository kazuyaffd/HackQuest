# Challenge 2 – LSB Basics

## 📝  How to Solve
1. Download the PNG (e.g. `steg2.png`).  
2. Use an LSB/steganography tool to reveal hidden text. Options:

   **Using zsteg (if installed):** `zsteg <image>`<br>
   OR<br>
   **Using Python:**
   ```python
   from stegano import lsb
   print(lsb.reveal("<image>"))
    ```

3. The output will show the hidden ASCII string.

## Flag

```c
CTF{lsb_reveals_secret}
```


## 🎓 What You Learned
- Least Significant Bit (LSB) steganography hides data inside the lowest bits of pixel values
- Specialized tools (zsteg, stegano, stegsolve) can extract hidden messages.
- LSB techniques are common in CTFs and are an introductory steg concept.