# Solution — Hidden HTML Comment

## Challenge
Find the flag hidden in an HTML comment inside the page.

## Steps
1. Open the `index.html` in a browser.
2. Right-click and choose **View Page Source** (or press Ctrl+U).
3. Search the source for `FLAG:` or `CTF{...}`.
4. You will find a comment line similar to: `<!--CTF{hidden_in_html_comment} -->`

## Flag
```
CTF{hidden_in_html_comment}
```

## What you learned
- Sensitive info should not be placed in HTML comments on publicly visible pages.
- “View source” often reveals hidden comments and metadata.