<?php 
$connection=mysqli_connect('localhost','root','','medical');
$id = $_GET['id'];
$result = mysqli_query($connection, "delete from contact where id='$id'");
    if($result){
      header("Location: blank.php");
    }
    else{echo "<script>alert('Have Erro')</script>";}
?>