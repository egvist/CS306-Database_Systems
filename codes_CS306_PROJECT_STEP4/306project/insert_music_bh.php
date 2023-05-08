<?php 

include "config.php"; 

if (!empty($_POST['mname'])){ 
    $music_name = $_POST['mname']; 
    $total_plays = $_POST['tp']; 
    $music_rating = $_POST['mr'];
    $music_genre = $_POST['mg'];
    $music_date = $_POST['md']; 
    $sql_statement = "INSERT INTO music(music_name, total_plays, music_rating,music_genre,music_date) VALUES ('$music_name','$total_plays','$music_rating','$music_genre','$music_date')"; 
    $result = mysqli_query($db, $sql_statement);
    include "insertmusic.php";
} 
else 
{

    include "nonamepageinsertion.php";
   
}

?>
