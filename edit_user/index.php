<html>
    <head>
        <style>
            table{
                width: 60%;
                border-collapse: collapse;
            }
            td{
                border: 1px solid black;
                border-collapse: collapse;
                width: 20%;
                height: 10%;
            }
        </style>
    </head>
    <body>
        <h1 style="margin-left:400px;margin-top:100px;">This is User List Page:</h1>
        <table style="margin-left:320px;">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>email</td>
                <td>phone</td>
                <td>msg</td>
                <td>Action</td>
                
            </tr>
            
                <?php 
                $connection=mysqli_connect('localhost','root','','medical');
                $result=mysqli_query($connection,"select * from contact");
                while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>";
                    echo $row['id'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['name'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['email'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['phone'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['msg'];
                    echo "</td>";
                    echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a></td>";
                    echo "</tr>";
                }
                ?>
           
        </table>
    </body>
</html>