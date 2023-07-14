<?php
include './lib/db_conn.php';

session_start();
if(!isset($_SESSION['username'])) {
    echo "<script>location.replace('locale.php');</script>";            
}

else {
    $username = $_SESSION['name'];
    $name = $_SESSION['username'];
} 
?>
<html lang="en">
<head>
    <title>index</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="./lib/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="./lib/jquery.js"></script>
  <link rel="stylesheet" href="./lib/css/style.css">
</head>
<body>
<div class="container">
    <div class="base">
        <h2><?php echo "こんにちは！, $username 様！";?></h2>
        <button type="button" class="btn btn-primary" onclick="location.href='myaccount.php'">
            情報を見る
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
