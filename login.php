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
    <form method="post" action="check_login.php" class="loginForm" id="login_form">
      <div class="container">
      <h2>ログインページ</h2>
      <div class="mb-3">
      <input type="text" name="_id" id="_id" class="form-control" placeholder="ID">
      <div class="invalid-feedback">
      IDを入力してください。
      </div>
      </div>
      <div class="mb-3">
      <input type="password" name="_pw" id="_pw" class="form-control" placeholder="PASSWORD">
      </div>
      <button type="submit" value="login" class="btn btn-primary" onclick="button()">ログイン</button> 
      <button type="button" class="btn btn-secondary" onclick="location.href='regist.php'">会員登録</button>
      </div>
    </form>
  </main>
</body>
<script>

let isIDValid = false;
let isPwValid = false;


  document.querySelector("#_id").addEventListener("input",function(){
    this.classList.remove("is-valid");
     this.classList.remove("is-invalid");
     const inputID=this.value;
     if(inputID==0){
        this.classList.add("is-invalid");
        isIDValid = false;
     }else{
        this.classList.add("is-valid");
        isIDValid = true;
     }
});

document.querySelector("#_pw").addEventListener("input",function(){
    this.classList.remove("is-valid");
     this.classList.remove("is-invalid");
     const inputPW=this.value;
     if(inputPW==0){
        this.classList.add("is-invalid");
        isPWValid = false;
     }else{
        this.classList.add("is-valid");
        isPWValid = true;
     }
});
</script>
</html>
