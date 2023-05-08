<?php  

include('config2.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(

    ':pub_name'  => $form_data->pub_name,
    ':pub_founded'  => $form_data->pub_founded,
    ':pub_total_emp'  => $form_data->pub_total_emp,
    ':pub_revenue'  => $form_data->pub_revenue,
    ':pub_id'  => $form_data->pub_id
);


$query = 
"UPDATE publisher 
SET pub_name = :pub_name, pub_founded = :pub_founded,  pub_total_emp = :pub_total_emp, pub_revenue = :pub_revenue 
WHERE pub_id = :pub_id
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