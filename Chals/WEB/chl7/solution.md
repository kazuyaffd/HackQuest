# 📤 Challenge 7 – File Upload

##  📝 How to Solve
1. The page only allows uploading **image files** (`.png`, `.jpg`, `.jpeg`).  
2. Create a simple text file with the content:  `Hello world`
3. Rename the file to **`file.txt.png`** (or simply `file.png`).  
4. Upload this renamed file.  
5. The server accepts it and reveals the flag.  

## Flag
```c
CTF{file_upload_bypass}
```

## 🎓 What You Learned
- File upload restrictions are often implemented **insecurely**.  
- Many systems check only the **file extension** and not the actual content or MIME type.  
- Attackers can **rename non-image files** with a valid extension to bypass such filters.  
- **Best Practice:** Always validate file uploads on the server side using:  
- MIME type checks  
- File header (“magic number”) checks  
- Limiting upload directories and permissions  
- Antivirus/malware scanning 