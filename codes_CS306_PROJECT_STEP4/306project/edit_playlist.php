<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(

    ':playlist_title'  => $form_data->playlist_title,
    ':playlist_likes'  => $form_data->playlist_likes,
    ':total_duration'  => $form_data->total_duration,
    ':n_of_songs'  => $form_data->n_of_songs,
    ':playlist_id'  => $form_data->playlist_id
);


$query = 
"UPDATE playlist 
SET playlist_title = :playlist_title, playlist_likes = :playlist_likes,  total_duration = :total_duration, n_of_songs = :n_of_songs
WHERE playlist_id = :playlist_id
";

$statement = $db->prepare($query);
if($statement->execute($data))
{
    $message = 'Data Edited';
}

$output = array(
    'message' => $message
);

echo json_encode($output);

?>