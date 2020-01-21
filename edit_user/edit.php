<?php
$connection=mysqli_connect('localhost','root','','lab_final');
$id = $_GET['id'];
$result = mysqli_query($connection, "SELECT * FROM registration WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$id = $res['id'];
	$username = $res['username'];
	$name = $res['name'];
	
}
if(isset($_POST['update'])){
    $update_id = $_POST['id'];
	$update_username = $_POST['username'];
	$update_name = $_POST['name'];
$result = mysqli_query($connection, "UPDATE registration SET id='$update_id',username='$update_username',name='$update_name' WHERE id=$update_id");

		header("Location: index.php");
}
?>
<html>
    <head></head>
    <body>
      <div class="edit" style="margin-left:400px; margin-top:100px;">
      <h1>This is Update Page:</h1>
       <form action="" method="post">
        <input type="text" name="id" value="<?php echo $id;?>">
        <input type="text" name="username" value="<?php echo $username;?>">
        <input type="text" name="name" value="<?php echo $name;?>"><br><br>
        <input type="submit" name="update" value="update"><br><br>
        <a href="index.php"><h1>Back To Previous Page</h1> </a>
        </form>
        </div>
    </body>
</html>