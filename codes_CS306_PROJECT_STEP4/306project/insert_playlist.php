<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(
    ':playlist_title'  => $form_data->playlist_title,
    ':playlist_likes'  => $form_data->playlist_likes,
    ':total_duration'  => $form_data->total_duration,
    ':n_of_songs'  => $form_data->n_of_songs, 
 
);

$query = "INSERT INTO playlist(playlist_title, playlist_likes, total_duration,n_of_songs) 
VALUES (:playlist_title,:playlist_likes,:total_duration,:n_of_songs)
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
