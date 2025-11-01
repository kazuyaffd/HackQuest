# Challenge 1 – Hidden Secret

## 📝 How to Solve

1. Right-click anywhere on the challenge page → select **“View Page Source”**  
   *(shortcut: `CTRL+U` on Windows/Linux or `CMD+Option+U` on Mac)*.  
2. Scroll through the HTML code.  
3. Look for hidden comments. You’ll find:  
```html
<!-- flag: CTF{view_source_wins} -->
```


## Flag
```c
CTF{view_source_wins}
```

## 🎓 What You Learned
Webpages often contain hidden information in their source code, such as comments, test data, or leftover debugging info.<br>
By viewing the HTML source (CTRL+U or right-click → View Page Source), you can uncover details that are not displayed on the screen.<br>
This is a fundamental step in web reconnaissance and teaches students to always look “under the hood” of a webpage.

#### ✅ In short: Always check the page source: hidden flags, clues, or vulnerabilities may be there.