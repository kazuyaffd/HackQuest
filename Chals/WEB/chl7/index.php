<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Web Challenge 7 - File Upload</title>
  <style>
    body { background:#0f172a; color:#f8fafc; font-family:"Courier New", monospace; text-align:center;}
    header, footer { background:#1e293b; padding:20px; color:#38bdf8; font-weight:bold; text-shadow:0 0 8px #38bdf8;}
    .content { padding:50px; }
    h2 { color:#facc15; text-shadow:0 0 8px #facc15; }
    .hint-box { margin-top:30px; padding:15px; border:2px dashed #38bdf8; display:inline-block; background:#1e293b; color:#38bdf8;}
  </style>
</head>
<body>
  <header>📤 Web Challenge 7: File Upload</header>
  <div class="content">
    <h2>Upload an Image</h2>
    <p>Only image files are allowed here… or are they?</p>
    <form method="POST" enctype="multipart/form-data">
      <input type="file" name="upload"><br><br>
      <input type="submit" value="Upload">
    </form>
    <div class="hint-box">💡 Hint: Sometimes, changing the file extension is enough.</div>
  </div>
  <footer>CTF Challenge Portal - Web Category</footer>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['upload']['name'];
    $ext = pathinfo($file, PATHINFO_EXTENSION);

    if ($ext === "png" || $ext === "jpg" || $ext === "jpeg") {
        echo "<p style='color:#facc15;'>File uploaded successfully, but no flag here...</p>";
    } else {
        echo "<p style='color:#22c55e; font-weight:bold;'>Flag: CTF{file_upload_bypass}</p>";
    }
}
?>
