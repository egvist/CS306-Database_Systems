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
            <th scope="col">Playlist ID  </th>
            <th scope="col">Playlist Name  </th>
            <th scope="col">Playlist Likes  </th>
            <th scope="col">Total Duration </th>
            <th scope="col">Number of Songs </th>
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
  $sql_statement = "SELECT * FROM playlist";
}
else
{
  $sql_statement = "SELECT * FROM playlist WHERE playlist_title ='$p_name'"  ;
}


$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result

  $playlist_id = $row['playlist_id']; 
  $playlist_title = $row['playlist_title']; 
  $playlist_likes = $row['playlist_likes'];
  $total_duration = $row['total_duration']; 
  $n_of_songs = $row['n_of_songs']; 

 


    
  
   
    echo "<tr>
    
                    <th scope='row'>$playlist_id</th>
                    <td>$playlist_title</td>
                    <td>$playlist_likes</td>
                    <td>$total_duration</td>
                    <td>$n_of_songs</td>
                    <td><a href='playlist_info.php?id=$playlist_id'> Info </a> <br></td>    " ;
                              
     
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