
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
            <th scope="col">Artist ID  </th>
            <th scope="col">Artist Name  </th>
            <th scope="col">Artist Genre  </th>
            <th scope="col">monthly listeners</th>
            <th scope="col">Most Popular Song</th>
            <th scope="col">Info </th>

            <br>
        </tr>
    </thead>
    <tbody>
<?php 


include "config.php"; // Makes mysql connection





$a_name = isset($_POST['a_name']) ? $_POST['a_name'] : '';

if(isset($_GET['a_name'])||$a_name == "")
{
  $sql_statement = "SELECT * FROM artist";
}
else
{
  $sql_statement = "SELECT * FROM artist WHERE a_name ='$a_name'"  ;
}


$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result

  $artist_id = $row['a_id']; 
  $artist_name = $row['a_name']; 
  $artist_genre = $row['a_genre'];
  $mth_list = $row['a_mnth_listeners'];
  $popular_song = $row['a_most_popular_song']; 
    echo "<tr>
    
                    <th scope='row'>$artist_id</th>
                    <td>$artist_name</td>
                    <td>$artist_genre</td>
                    <td>$mth_list</td>
                    <td>$popular_song</td>
                    <td><a href='artist_info.php?id=$artist_id'> Info </a> <br></td>    " ;
                              
     
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