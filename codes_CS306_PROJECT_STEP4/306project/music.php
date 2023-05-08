
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
            <th scope="col"> Music ID  </th>
            <th scope="col">Music Name  </th>
            <th scope="col">Total Plays  </th>
            <th scope="col">Music Rating  </th>
            <th scope="col">Music Genre  </th>
            <th scope="col">Music Date </th>
            <th scope="col">Info </th>

            <br>
        </tr>
    </thead>
    <tbody>
<?php 


include "config.php"; // Makes mysql connection





$m_name = isset($_POST['m_name']) ? $_POST['m_name'] : '';
$m_genre = isset($_POST['m_genre']) ? $_POST['m_genre'] : '';
if(empty($_GET['m_name']) && empty($_GET['m_genre']))
{
  $sql_statement = "SELECT * FROM music";
}
if($m_name == ""&&$m_genre == "")
{
  $sql_statement = "SELECT * FROM music";
}
if($m_name == ""&&$m_genre != "")
{
  $sql_statement = "SELECT * FROM music WHERE music_genre ='$m_genre'";
}
if($m_name != ""&&$m_genre == "")
{
  $sql_statement = "SELECT * FROM music WHERE music_name ='$m_name'";
}
if($m_name != ""&&$m_genre != "")
{
  $sql_statement = "SELECT * FROM music WHERE music_name ='$m_name'AND  music_genre ='$m_genre' ";
}


$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result

  $music_id = $row['music_id']; 
  $music_name = $row['music_name']; 
  $total_plays = $row['total_plays'];
  $music_rating = $row['music_rating'];
  $music_genre = $row['music_genre'];
  $music_date = $row['music_date'];

 


    
  
   
    echo "<tr>
    
                    <th scope='row'>$music_id</th>
                    <td>$music_name</td>
                    <td>$total_plays</td>
                    <td>$music_rating</td>
                    <td>$music_genre</td>
                    <td>$music_date</td> 
                    <td><a href='musicinfo.php?id=$music_id'> Info </a> <br></td>    " ;
                              
     
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
            window.location.href = 'index.php';
            return false;
        }

  function returnmusic(id)
   {
  
  

    window.location.href = 'musicinfo.php';
    return false;
   
   }
  </script>