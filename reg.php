<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];


if(!empty($fullname)|| !empty($email
|| !empty($password)))
{

    $host = "localhost;
    $dbusername = "root"
    $password = "";
    $dbname = "mayoncars";
}


$conn = new mysqli($host,$dbusername,$password,$mayoncars);
 if(mysqli_connect_error()){
 die('Connect Error('.mysqli_connect_errno() .').mysqli_connect_error());
}
 else{
 $SELECT = "SELECT email From 
           regtable1 Where email = ? Limit 1"
     
           ;

$INSERT = "INSERT Into regtable1(fullname,email,password)values(?,?,?)";

$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum = $stmt->num_rows;


if($rnum==0){
$stmt->close();
$stmt =$conn->prepare($INSERT);
$stmt->bind_param("sss",$fullname,$email,$password);
$stmt->execute();
echo "New record inserted successfully";
}
else{
echo "Someone already register using this mail";
}
$stmt->close();
$conn->close();
}
}else{
echo "All field are required";
die();
}
?>
