<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(

    ':platform_name'  => $form_data->platform_name,
    ':platform_id'  => $form_data->platform_id,

);


$query = 
"UPDATE platform 
SET platform_name = :platform_name  
WHERE platform_id = :platform_id
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