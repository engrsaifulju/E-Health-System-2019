<?php 
$connection=mysqli_connect('localhost','root','','medical');
$id = $_GET['id'];
$result = mysqli_query($connection, "delete from booking where id='$id'");
    if($result){
      header("Location: booking.php");
    }
    else{echo "<script>alert('Have Erro')</script>";}
?>