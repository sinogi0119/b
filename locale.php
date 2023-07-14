<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ログインページ</title>
  <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="./lib/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./lib/css/loginstyle.css">
</head>
<body class="text-center">
  <main class="form-signin">
  <button type="button" class="btn btn-dark" onclick="location.href='./es/login.php'">English</button>
  <button type="button" class="btn btn-dark" onclick="location.href='./jp/login.php'">日本語</button>
  <button type="button" class="btn btn-dark" onclick="location.href='./kr/login.php'">한국어</button>
  </main>
</body>
<script> //起動しない
var type = navigator.appName
var lang;
if (type=="Netscape")
    lang = navigator.language
else
    lang = navigator.userLanguage

var lang = lang.substr(0,2)

if (lang == "ko")
    window.location.replace('login.php')
else if (lang == "jp")
    window.location.replace('login.php')
else
    window.location.replace('login.php')
</script>
</html>
