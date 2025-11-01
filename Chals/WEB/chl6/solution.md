# 🤖 Challenge 6 – Robots.txt

## 📝 How to Solve
1. In your browser, visit: `http://<challenge-url>/robots.txt`
2. The file contains instructions for search engines:  
```
User-agent: *
Disallow: /supersecret/
```
3. This tells search engines not to index `/supersecret/`.  
4. Manually visit the hidden directory: `http://<challenge-url>/supersecret/`
5. The page displays the flag.  

## Flag
```
CTF{robots_are_not_secret}
```

## 🎓 What You Learned
- The **robots.txt** file is a standard used to guide search engines on which parts of a website should not be crawled.  
- However, it is **not a security mechanism** — anyone can view it.  
- Attackers often check `robots.txt` to find hidden directories or files.  
- **Best Practice:** Do not rely on `robots.txt` to hide sensitive content. Use proper authentication and access controls instead.  