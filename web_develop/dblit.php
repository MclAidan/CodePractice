<?php


$servername = "localhost";
$username = "testusr";
$password = "12345";
$dbname = "datab";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$return_arr = array();

$query = "SELECT id, title, genre, author,synopsis,filename FROM litdb ";


$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $title = $row['title'];
    $genre = $row['genre'];
    $author = $row['author'];
    $synopsis = $row['synopsis'];
    $filename = $row['filename'];


    $return_arr[] = array("id" => $id,
                    "title" => $title,
                    "genre" => $genre,
                    "author" => $author,
                    "synopsis" => $synopsis,
                    "filename1" => $filename );
}

// Encoding array in JSON format
echo json_encode($return_arr);
mysqli_close($conn);
//echo '<script>alert("dblitran and closed conn")</script>'; 

?>