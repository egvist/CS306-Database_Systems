<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(

    ':a_name'  => $form_data->a_name,
    ':a_genre'  => $form_data->a_genre,
    ':a_mnth_listeners'  => $form_data->a_mnth_listeners,
    ':a_most_popular_song'  => $form_data->a_most_popular_song,
    ':a_id'  => $form_data->a_id
);


$query = 
"UPDATE artist 
SET a_name = :a_name, a_genre = :a_genre,  a_mnth_listeners = :a_mnth_listeners, a_most_popular_song = :a_most_popular_song  
WHERE a_id = :a_id
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