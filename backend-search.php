<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "music");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term = mysqli_real_escape_string($link, $_REQUEST['term']);
 //INSERT INTO `music`(`id`, `music_name`, `artist`, `genre`, `file`, `date`, `time`, `email`)
if(isset($term)){
    // Attempt select query execution
    $sql = "SELECT * FROM music WHERE music_name 
        LIKE '%".$term."%' OR artist  LIKE '%".$term."%' OR genre  LIKE '%".$term."%' OR file LIKE '%".$term."%' ORDER BY  `music`.`music_name` ASC   ";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['music_name'].", ".$row['artist']. "- ".$row['genre']."</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
 
// close connection
mysqli_close($link);
?>
