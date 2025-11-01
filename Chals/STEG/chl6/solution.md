#  Challenge 6 – Invisible Text

## 📝 How to Solve
1. Download `.html` file. Open it in a browser, the page will appear blank.  
2. Reveal the hidden content by either:
   - Selecting all text (`Ctrl+A` / `Cmd+A`), which highlights the white text on white background, or
   - Opening Developer Tools (Inspect → Elements) and reading the page body content, or
   - Viewing the HTML source (`Ctrl+U`).

3. The selected or inspected text will show the flag string.

## Flag:
```c 
 CTF{invisible_but_here}
```


## 🎓 What You Learned
- CSS can hide text by making text color the same as background (e.g., white-on-white).  
- Simple actions like **selecting text** or **viewing source** can reveal hidden information.  
- Always check the DOM and source when content appears missing.