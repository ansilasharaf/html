
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mesce";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
echo("connection ");
}
$sql ="create table myguests (
id int (5),
name varchar(10) ,
place varchar(20),
email varchar(10)
)";

if($conn->query($sql) === TRUE)
{
echo " table myguests created successfully";
}
else
{
echo"error creating table :" . $conn->error;
}


$ins="insert into 
myguests(id,name,place,email)values(1,'manu','kochi','manu@gmail.com')";

if($conn->query($ins) === TRUE)
{
echo"insert successfully";
}
else
{
echo"error creating table :" . $conn->error;
}
$conn->close();
?>
