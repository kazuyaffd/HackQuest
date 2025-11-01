# 🕵️ Challenge 2 – Form Inspector

##  📝 How to Solve
1. Open **Developer Tools** in your browser (Press `F12`).
2. Go to the **Elements** tab to inspect the page’s HTML structure.
3. Locate the `<form>` section of the login page.
4. You will find a **hidden input field** containing the flag:

```html
<input type="hidden" name="flag" value="CTF{hidden_in_form}">
```

## Flag
```c
CTF{hidden_in_form}
```


## 🎓 What You Learned
Webpages can hide data inside hidden form fields. These fields are not visible on the page but can be discovered using browser tools.<br>As a security tester, always inspect HTML forms for hidden inputs or values that may reveal sensitive information.