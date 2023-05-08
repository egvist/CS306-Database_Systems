
<style>
/* Table here.... */
table {
  border-collapse: separate;
  border-spacing: 3;
  color: #4a4a4d;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
th,
td {
  padding: 20px 30px;
  vertical-align: middle;
}
thead {
  background: #395870;
  color: #fff;
}
th:first-child {
  text-align: center;
}
tbody tr:nth-child(even) {
  background: #f0f0f2;
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
td:first-child {
  border-left: 1px solid #cecfd5;
}
.book-title {
  color: #395870;
  display: block;
}
.item-id {
  text-align: center;
}
.item-name {
  text-align: center;
}
.item-plays {
  text-align: center;
}
.item-rate {
  text-align: center;
}
.item-genre {
  text-align: center;
}
.item-date {
  text-align: right;
}
.item-multiple {
  display: block;
}
tfoot {
  text-align: right;
}
tfoot tr:last-child {
  background: #f0f0f2;
}
</style>

<html\>
<table id= "example" class= "display nowrap" style= "width: %100">
<thead>
        <tr>
            <th scope="col"> Producer ID  </th>
            <th scope="col">Producer Name  </th>
            <th scope="col">Producer Rating  </th>
            <th scope="col">Info </th>

            <br>
        </tr>
    </thead>
    <tbody>
<?php 


include "config.php"; // Makes mysql connection





$p_name = isset($_POST['p_name']) ? $_POST['p_name'] : '';

if(isset($_GET['p_name'])||$p_name == "")
{
  $sql_statement = "SELECT * FROM producer";
}
else
{
  $sql_statement = "SELECT * FROM producer WHERE prdoucer_name ='$p_name'"  ;
}


$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result

  $producer_id = $row['producer_id']; 
  $producer_name = $row['prdoucer_name']; 
  $producer_rating = $row['producer_rating'];

 


    
  
   
    echo "<tr>
    
                    <th scope='row'>$producer_id</th>
                    <td>$producer_name</td>
                    <td>$producer_rating</td>
                    <td><a href='producer_info.php?id=$producer_id'> Info </a> <br></td>    " ;
                              
     
} 
?>
<br>


</div>

</p>
</body>
</tbody>
</table>
</html>

<script>
function returnsearch()
        {
            window.location.href = 'producer_index.php';
            return false;
        }

  function returnmusic(id)
   {
  
  

    window.location.href = 'musicinfo.php';
    return false;
   
   }
  </script>