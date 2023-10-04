<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "register";


$conn = mysqli_connect($host,$username,$password,$database);

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "insert into user(name,email) values('$name','$email')";

    if(mysqli_query($conn, $sql)){
        echo "
        <table border>
        <thead> <th> Name </th> 
                <th> Email </th>
        </thead>
        <tbody> <td>$name</td>
                <td>$email</td>
        </tbody>
        </table>
        <button><a href='index.php' > BACK </a> </button>
        ";

        // echo "data inserted";
    }else{
        echo "error".$sql."<br/>".mysqli_error($conn);
    }

    mysqli_close($conn);

}
?>