<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Web Challenge 4 - Cookie Monster</title>
  <style>
    body { background:#0f172a; color:#f8fafc; font-family:"Courier New", monospace; text-align:center;}
    header, footer { background:#1e293b; padding:20px; color:#38bdf8; font-weight:bold; text-shadow:0 0 8px #38bdf8;}
    .content { padding:50px; }
    h2 { color:#facc15; text-shadow:0 0 8px #facc15; }
    .hint-box { margin-top:30px; padding:15px; border:2px dashed #38bdf8; display:inline-block; background:#1e293b; color:#38bdf8;}
  </style>
</head>
<body>
  <header>🍪 Web Challenge 4: Cookie Monster</header>
  <div class="content">
    <h2>Do You Like Cookies?</h2>
    <p>Sometimes, the sweetest secrets are baked inside your browser cookies...</p>
    <div class="hint-box">💡 Hint: Check browser storage → Cookies.</div>
  </div>
  <footer>CTF Challenge Portal - Web Category</footer>
</body>
</html>

<?php
if (isset($_COOKIE['flag'])) {
    echo "<p style='color:#22c55e; font-weight:bold;'>Welcome back! Cookie says: ".$_COOKIE['flag']."</p>";
} else {
    setcookie("flag", "CTF{cookies_are_yummy}");
}
?>
