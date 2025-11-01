# 🔑 Challenge 3 – Simple Login

## 📝 How to Solve
1. Open the challenge page — it displays the message **“Authorized users only.”**
2. This hints that the site may still be using **default credentials**.
3. Try the most common default login:

   - **Username:** `admin`  
   - **Password:** `admin`

4. The login succeeds and reveals the flag.

## Flag
```c
CTF{default_creds_are_bad}
```


## 🎓 What You Learned
- Many websites and applications ship with **default usernames and passwords** (e.g., `admin:admin`, `root:toor`, etc.).  
- Attackers often try these first to gain unauthorized access.  
- **Best Practice:** Always change default credentials immediately after installing software or setting up a system.  
