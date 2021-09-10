<?php


$servername = "localhost";
$username = "testusr";
$password = "12345";
$dbname = "datab";

$idv = $_POST['data1'];
$catt = $_POST['catt'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

    $return_arr = array();
    $query = "SELECT title, genre, author, synopsis, filename FROM litdb WHERE id = $idv ";
    
    $result = mysqli_query($conn,$query);

$row = mysqli_fetch_array($result);

   $title = $row['title'];
    $genre = $row['genre'];
    $author = $row['author'];
    $synopsis = $row['synopsis'];
    $filename = $row['filename'];


    $return_arr[] = array(
                    "title" => $title,
                    "genre" => $genre,
                    "author" => $author,
                    "synopsis" => $synopsis,
                    "filename1" => $filename );


// Encoding array in JSON format
echo json_encode($return_arr);
mysqli_close($conn);







?>