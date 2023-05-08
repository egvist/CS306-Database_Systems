<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(
    ':pub_name'  => $form_data->pub_name,
    ':pub_founded'  => $form_data->pub_founded,
    ':pub_total_emp'  => $form_data->pub_total_emp,
    ':pub_revenue'  => $form_data->pub_revenue,
 
 
);

$query = "INSERT INTO publisher(pub_name, pub_founded, pub_total_emp,pub_revenue) 
VALUES (:pub_name,:pub_founded,:pub_total_emp,:pub_revenue)
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
