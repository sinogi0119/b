<?php
include './lib/db_conn.php';


$username=$_POST['_id'];
$userpass=$_POST['_pw'];
$email=$_POST['_email'];
$sei=$_POST['_sei'];
$mei=$_POST['_mei'];
$seibetsu=$_POST['_seibetsu'];

$sql = "insert into member values ('', '$username', password('$userpass'), '$email', '$sei', '$mei', '$seibetsu' , NOW())";
$result = mysqli_query($conn,$sql);

$data['sql']=$sql;

mysqli_close($conn);
// echo json_encode($data);

if ($result === false) {
    echo "問題が発生しました。";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("会員登録しました。");
        location.href = "index.php";
    </script>
<?php
}
?>