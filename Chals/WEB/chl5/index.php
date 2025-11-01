<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Web Challenge 5 - SQL Injection</title>
  <style>
    body { background:#0f172a; color:#f8fafc; font-family:"Courier New", monospace; text-align:center;}
    header, footer { background:#1e293b; padding:20px; color:#38bdf8; font-weight:bold; text-shadow:0 0 8px #38bdf8;}
    .content { padding:50px; }
    h2 { color:#facc15; text-shadow:0 0 8px #facc15; }
    .hint-box { margin-top:30px; padding:15px; border:2px dashed #38bdf8; display:inline-block; background:#1e293b; color:#38bdf8;}
  </style>
</head>
<body>
  <header>💉 Web Challenge 5: SQL Injection</header>
  <div class="content">
    <h2>Login Portal</h2>
    <p>The database looks vulnerable... can you break in?</p>
    <form method="POST">
      Username: <input type="text" name="user"><br><br>
      Password: <input type="password" name="pass"><br><br>
      <input type="submit" value="Login">
    </form>
    
  </div>
  <footer>CTF Challenge Portal - Web Category</footer>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['user'];
    $p = $_POST['pass'];
    if ($u === "' OR '1'='1" || $p === "' OR '1'='1") {
        echo "<p style='color:#22c55e; font-weight:bold;'>Flag: CTF{sql_injection_ftw}</p>";
    } else {
        echo "<p style='color:#ef4444;'>Access Denied</p>";
    }
}
?>
