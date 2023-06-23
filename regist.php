<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>会員登録ページ</title>
  <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="./lib/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./lib/jquery.js"></script>
    <link rel="stylesheet" href="./lib/css/registstyle.css">
</head>
<body>
  <div class="container">
    <div class="input-form-backgroud row">
      <div class="input-form col-md-12 mx-auto">
        <h4 class="mb-3">会員登録ページ</h4>
        <form action="./a.php" method="post" name="regiform" id="regist-Form" class="validation-form" novalidate onsubmit="return sendit()">

          <div class="row">
          <div class="col-md-10 mb-3">
        <label  for="_d">ID</label>
            <input name="_id" type="text" class="form-control" id="_id" placeholder="ID" required>
            <div class="invalid-feedback">
              IDを入力してください。
            </div>
          </div>

          <div class="col-md-2 mb-3">
          <label for="_d">ID CHECK</label>
          <div>
            <input class="btn btn-primary btn-block" type="button" id="checkIdBtn" value="check" onclick="checkId()">
          </div></div>
          <p id="result">&nbsp;</p>

          <div class="mb-3">
            <label for="pw">パスワード</label>
            <input name="_pw" type="password" class="form-control" id="_pw" placeholder="password" required>
            <div class="invalid-feedback">
            パスワードを入力してください。
            </div>
          </div>

          <div class="mb-3">
            <label for="pw">パスワード再確認</label>
            <input name="_pwre" type="password" class="form-control" id="_pwre" placeholder="password" required>
            <div class="invalid-feedback">
            パスワード再確認を入力してください。
            </div>
          </div>

            <div class="col-md-6 mb-3">
              <label for="sei">氏</label>
              <input name="_sei" type="text" class="form-control" id="_sei" placeholder="" value="" required>
              <div class="invalid-feedback">
                氏を入力してください。
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="mei">名</label>
              <input name="_mei" type="text" class="form-control" id="_mei" placeholder="" value="" required>
              <div class="invalid-feedback">
                名を入力してください。
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">メールアドレス</label>
            <input name="_email" type="email" class="form-control" id="email" placeholder="youremail@example.com" required>
            <div class="invalid-feedback">
              メールアドレスを入力してください。
            </div>
          </div>

          <label for="seibestu">性別</label>
          <div class="form-check" required>
            <input class="form-check-input" id="flexRadioDefault1" type="radio" name="_seibetsu" value="M" required>
            <label class="form-check-label" for="flexRadioDefault1">男子</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" id="flexRadioDefault2" type="radio" name="_seibetsu" value="F" required>
            <label class="form-check-label" for="flexRadioDefault2">女子</label>
            </div>

          <div class="mb-4"></div>
          <input class="btn btn-primary btn-lg btn-block" type="submit" id="signup-Button" value="作成">
          <input class="btn btn-secondary btn-lg btn-block" type="button" onclick="location.href='index.php'" value="戻る">
        </form>
      </div>
    </div>
  </div>
</body>
        <script src="./regist.js"></script>
</html>