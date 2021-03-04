<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Form</title>
</head>
<body>
    <table Border='2'>
    <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
    </tr>
    

<?php
include("connect.php");
$query = "SELECT * FROM users";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
    while($result = mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result[ 'id' ]."</td>
        <td>".$result[ 'firstName' ]."</td>
        <td>".$result[ 'lastName' ]."</td>
        <td>".$result[ 'Email' ]."</td>
        </tr>
        ";
    }
}
else{
    echo "no data";
}

?>

</table>
</body>
</html>