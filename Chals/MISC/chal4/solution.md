# Solution — Regex Extraction

## Challenge
Find the flag embedded in the noisy text block.

## Steps
1. Use a regular expression to extract strings that look like `CTF{...}`.
   - Example regex: `CTF\{[^\}]+\}`

2. Apply the regex to the provided text. You can test on the command line:
   ```bash
   echo "Dear... token: CTF{regex_fun_123} ..." | grep -o -E 'CTF\{[^}]+\}'
3. The match is: `CTF{regex_fun_123}`

## Flag
```
CTF{regex_fun_123}
```

## What you learned
- Regular expressions are a powerful way to find patterns in text.
- grep -o -E is handy to extract matching substrings on the command line.