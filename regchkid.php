
<?php
include './lib/db_conn.php';

$num  =0;
$num1 =1;
$umn2 =2;

$id = mysqli_real_escape_string($conn, $_POST['id']);

$sql="SELECT id from member where id='".$_POST['id']."'";
$row=mysqli_query($conn,$sql);
$total = mysqli_num_rows($row);

if($total>0){
echo $num1 =1;
}else if(!preg_match("/^[a-zA-z0-9]{1,12}$/",$id)){
echo $umn2 =2;
}else if((preg_match("/^[a-zA-z0-9]{1,12}$/",$id))){
echo $num  =0;
}
?>

