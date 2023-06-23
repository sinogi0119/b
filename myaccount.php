<?php
    session_start();
    if(!isset($_SESSION['username']) || !isset($_SESSION['username'])){
        echo "<script>alert('問題発生!');";
        echo "window.location.href=\"../b/index.php\";</script>";
    }

    $conn = mysqli_connect('localhost', 'root', '', 'user');
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM member WHERE id='$username'";
    $res = mysqli_fetch_array(mysqli_query($conn, $sql));
?>
<head>
    <title>accountpage</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="./lib/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="./lib/jquery.js"></script>
  <link rel="stylesheet" href="./lib/css/style.css">
</head>
<body>
<div class="container">
<div class=middle>
    <table>
        <tr>
            <th>ID</th>
            <td><?=$res['id']?></td>
        </tr>
        <tr>
            <th>姓</th>
            <td><?=$res['sei']?></td>
        </tr>
        <tr>
            <th>名</th>
            <td><?=$res['mei']?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?=$res['email']?></td>
        </tr>
        <tr>
            <th>性別</th>
            <td><?=$res['seibetsu']?></td>
        </tr>
        <tr>
            <th>ID作成日</th>
            <td><?=$res['regdate']?></td>
        </tr>
    </table>
    <button type="button" class="btn btn-primary" onclick="location.href='index.php'">
            戻る
        </button>
        <button id="testBtn" class="btn btn-secondary">ログアウト</button>
	<div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">確認</h5>
					</button> 
				</div>
				<div class="modal-body">ログアウトしますか？</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" onclick="location.href='logout.php'">ログアウト</a>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">いいえ</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script>
    		$('#testBtn').click(function(e){
			e.preventDefault();
			$('#testModal').modal("show");
		});
</script>
</body>