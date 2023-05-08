
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
            <th scope="col">Publisher ID  </th>
            <th scope="col">Publisher Name  </th>
            <th scope="col">Publisher Founded Date  </th>
            <th scope="col">Publisher Total Employee  </th>
            <th scope="col">Publisher Revenue  </th>
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
  $sql_statement = "SELECT * FROM publisher";
}
else
{
  $sql_statement = "SELECT * FROM publisher WHERE pub_name ='$p_name'"  ;
}


$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result

  $publisher_id = $row['pub_id']; 
  $publisher_name = $row['pub_name']; 
  
  $publisher_founded = $row['pub_founded'];
  $publisher_totalemp = $row['pub_total_emp']; 
  $publisher_revenue = $row['pub_revenue'];
  

 


    
  
   
    echo "<tr>
    
                    <th scope='row'>$publisher_id</th>
                    <td>$publisher_name</td>
                    <td>$publisher_founded</td>
                    <td>$publisher_totalemp</td>
                    <td>$publisher_revenue</td>
                    <td><a href='publisher_info.php?id=$publisher_id'> Info </a> <br></td>    " ;
                              
     
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