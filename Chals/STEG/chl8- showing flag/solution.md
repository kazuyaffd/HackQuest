# Challenge 8 – PDF Trick

## 📝 How to Solve
1. Download the PDF file. It appears blank.  
2. Search within the PDF for the string "CTF" using the viewer's find feature (Ctrl+F / Cmd+F). Because the flag is present as white text (text layer exists), the search will find the hidden text and jump to it.

   - If your PDF viewer does not find it, confirm the file contains a text layer (not just a raster image). Use `pdftotext`: `pdftotext <file> - | grep CTF`

3. The search/extraction shows the flag text.

## Flag:
```
CTF{pdf_hidden_flag}
```

## 🎓 What You Learned
- PDFs may contain **hidden or white-colored text** that is selectable/searchable even if invisible on a white background.  
- Use document search or `pdftotext` to reveal hidden textual content.  
- Do not assume a visually blank document has no text layer; always try text search/extraction.
