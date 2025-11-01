# Challenge 4 – ZIP Inside Image

## 📝  How to Solve
1. 1. Download the file.  
2. Inspect the file type: `file <image>`, If it mentions ZIP archive data or extra data, proceed.
3. Use `binwalk` to view embedded content: ` binwalk <image>`
4. Extract the embedded archive:
    - Option A: binwalk -e steg4.jpg (creates an extraction folder).

    - Option B: unzip steg4.jpg (works if the ZIP archive was appended).
4. Open the extracted flag.txt and read the contents: `cat flag.txt`

## Flag
```c
CTF{zip_in_image}
```

## 🎓 What You Learned

- Files can be polyglots (contain two file types), e.g., a JPEG with an appended ZIP.

- Tools like binwalk and standard unzip are useful to detect and extract hidden archives.

- Always check file headers and appended data when something looks suspicious.