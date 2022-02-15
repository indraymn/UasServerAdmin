<!-- Connect PHP  -->
<?php
    session_start();
    $conn = new mysqli("172.17.0.2", "root", "qwerty", "trucorp");
    if($conn->connect_error){
        die('Connect Error');
    }
    $data = [];
    $res = $conn->query("SELECT * FROM users");
    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td {
  border: solid black;
}
</style>
<body>
    <h2>Users Database Trucorp</h2>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
            <?php
                while($rows=$res->fetch_assoc())
                {
             ?> 
            <tr>
                <td><?php echo $rows['ID'];?></td>
                <td><?php echo $rows['Nama'];?></td>
                <td><?php echo $rows['Alamat'];?></td>
                <td><?php echo $rows['Jabatan'];?></td>
            </tr>
            <?php
                }
                ?>
        </table>
        </div>
        </br>
</body>
</html>
