<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(
 ':music_name'  => $form_data->music_name,
 ':total_plays'  => $form_data->total_plays,
 ':music_rating'  => $form_data->music_rating,
 ':music_genre'  => $form_data->music_genre,
 ':music_date'  => $form_data->music_date
 
 
);

$query = "INSERT INTO music(music_name, total_plays, music_rating,music_genre,music_date) 
VALUES (:music_name,:total_plays,:music_rating,:music_genre,:music_date)
";


$statement = $db->prepare($query);

if($statement->execute($data))
{
 $message = 'Data Inserted';
}

$output = array(
 'message' => $message
);

echo json_encode($output);




?>
