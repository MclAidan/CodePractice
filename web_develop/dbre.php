<?php


$servername = "localhost";
$username = "testusr";
$password = "12345";
$dbname = "datab";

$arg = $_POST['data1'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$return_arr = array();

if($arg == '0')
{
    $query =  "SELECT id, title, submit, author, abstract,filename FROM redb";
}

else
{
    $query =  "SELECT id, title, submit, author, abstract,filename FROM redb WHERE featured = '1'";
}




$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
$id = $row['id'] ;
    $title = $row['title'] ;
    $submit = $row['submit'];
    $author = $row['author'];
    $abstract = $row['abstract'];
    $filename = $row['filename'];


    $return_arr[] = array("id" => $id, "title" => $title,
                    "submit" => $submit,
                    "author" => $author,
                    "abstract" => $abstract,
                    "filename1" => $filename );
}

// Encoding array in JSON format
echo json_encode($return_arr);
mysqli_close($conn);

?>