# 💉 Challenge 5 – Basic SQL Injection

## 📝 How to Solve
1. The page presents a normal-looking **login form**.  
2. Suspect that it may be vulnerable to **SQL Injection**.  
3. In the **username** field, enter the following payload:  `' OR '1'='1`
4. Enter anything in the password field (it doesn’t matter).  
5. The crafted input changes the SQL query logic, bypassing authentication.  
6. The site logs you in and reveals the flag. 

## Flag
```c
CTF{sql_injection_ftw}
```

## 🎓 What You Learned
- **SQL Injection (SQLi)** is one of the most common and dangerous web vulnerabilities.  
- By inserting malicious input, attackers can alter the logic of SQL queries.  
- In this case, `' OR '1'='1` always evaluates to **true**, bypassing the login.  
- **Best Practice:** Always use **prepared statements** or **parameterized queries** to protect against SQLi.  