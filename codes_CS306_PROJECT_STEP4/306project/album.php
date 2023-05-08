
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
            <th scope="col"> Album ID  </th>
            <th scope="col">Album Name  </th>
            <th scope="col">Monthly Listening  </th>
            <th scope="col">Album Rating  </th>
            <th scope="col">Album Genre  </th>
            <th scope="col">Album Date </th>
            <th scope="col">Info </th>

            <br>
        </tr>
    </thead>
    <tbody>
<?php 


include "config.php"; // Makes mysql connection





$a_name = isset($_POST['a_name']) ? $_POST['a_name'] : '';
$a_genre = isset($_POST['a_genre']) ? $_POST['a_genre'] : '';
if(empty($_GET['a_name']) && empty($_GET['a_genre']))
{
  $sql_statement = "SELECT * FROM album";
}
if($a_name == ""&&$a_genre == "")
{
  $sql_statement = "SELECT * FROM album";
}
if($a_name == ""&&$a_genre != "")
{
  $sql_statement = "SELECT * FROM album WHERE album_genre ='$a_genre'";
}
if($a_name != ""&&$a_genre == "")
{
  $sql_statement = "SELECT * FROM album WHERE album_name ='$a_name'";
}
if($a_name != ""&&$a_genre != "")
{
  $sql_statement = "SELECT * FROM album WHERE album_name ='$a_name'AND  album_genre ='$a_genre' ";
}


$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result

  $album_id = $row['album_id']; 
  $album_name = $row['album_name']; 
  $mnth_listening = $row['mnth_listening'];
  $album_rating = $row['album_rating'];
  $album_genre = $row['album_genre'];
  $album_date = $row['album_date'];

 


    
  
   
    echo "<tr>
    
                    <th scope='row'>$album_id</th>
                    <td>$album_name</td>
                    <td>$mnth_listening</td>
                    <td>$album_rating</td>
                    <td>$album_genre</td>
                    <td>$album_date</td> 
                    <td><a href='album_info.php?id=$album_id'> Info </a> <br></td>    " ;
                              
     
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
            window.location.href = 'album_index.php';
            return false;
        }

  function returnmusic(id)
   {
  
  

    window.location.href = 'musicinfo.php';
    return false;
   
   }
  </script>