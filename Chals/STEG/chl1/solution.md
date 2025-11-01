# Challenge 1 – Image Metadata

## 📝 How to Solve
1. Download the challenge image (e.g. `steg1.jpg`).  
2. Inspect EXIF/metadata using a metadata tool such as `exiftool`: `exiftool <image>`
3. Look for suspicious fields `Artist`, `Comment`, `Description`.
4. You should find the flag stored in one of those metadata fields.

## Flag
```c
CTF{metadata_is_fun}
```

## 🎓 What You Learned
- Images often contain EXIF metadata that can store information about the file.
- Tools like exiftool reveal metadata that may include hidden clues or flags.
- Always check file metadata during reconnaissance.