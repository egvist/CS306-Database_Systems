<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(

    ':album_name'  => $form_data->album_name,
    ':mnth_listening'  => $form_data->mnth_listening,
    ':album_rating'  => $form_data->album_rating,
    ':album_genre'  => $form_data->album_genre,
    ':album_date'  => $form_data->album_date,
    ':album_id'  => $form_data->album_id
);


$query = 
"UPDATE album 
SET album_name = :album_name, mnth_listening = :mnth_listening,  album_rating = :album_rating, album_genre = :album_genre, album_date = :album_date  
WHERE album_id = :album_id
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