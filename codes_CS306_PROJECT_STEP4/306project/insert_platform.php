<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(
 ':platform_name'  => $form_data->platform_name,

 
 
);

$query = "INSERT INTO platform(platform_name) 
VALUES (:platform_name)
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
