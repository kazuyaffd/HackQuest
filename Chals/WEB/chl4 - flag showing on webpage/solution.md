# 🍪 Challenge 4 – Cookie Monster

## 📝 How to Solve
1. Open **Developer Tools** in your browser (Press `F12`).  
2. Navigate to the **Application** (or **Storage**) tab.  
3. Under **Cookies**, look at the entries set by the website.  
4. You will find a cookie named `flag` with the value:

## Flag
```c
CTF{cookies_are_yummy}
```

## 🎓 What You Learned
- **Cookies** are small pieces of data stored in the browser by websites.  
- Sensitive data like **flags, passwords, or secrets** should **never** be stored in cookies because users can easily read them.  
- Attackers can exploit this mistake to discover confidential information.  
- **Best Practice:** Use cookies only for session identifiers and always secure them with proper flags (e.g., `HttpOnly`, `Secure`).  