

<style>


/* Table here.... */
table {
border-collapse: separate;
border-spacing: 3;
color: #4a4a4d;
font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.music_info_table{
margin-left:auto;
margin-right: auto;

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
<table id= "example" class= "music_info_table" style= "width: %100">
<thead>
        <tr>
            <th scope="col"> Artist ID </th>
            <th scope="col">Artist Name  </th>
            <th scope="col">Artist Genre</th>
            <th scope="col"> Monthly Listeners </th>
            <th scope="col">Msot Popular Song  </th>

            <br>
        </tr>
    </thead>
    <tbody>
    <html\>

<?php
include "config.php"; 
$a_id = $_GET["id"];
$sql_statement = "SELECT * FROM artist WHERE a_id ='$a_id'";
$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $artist_id = $row['a_id']; 
    $artist_name = $row['a_name']; 
    $artist_genre = $row['a_genre'];
    $artist_ms = $row['a_mnth_listeners']; 
    $artist_ps = $row['a_most_popular_song'];
    
   
    echo "
    <td>$artist_id</td>
    <td>$artist_name</td>
    <td>$artist_genre</td>
    <td>$artist_ms</td>
    <td>$artist_ps</td>
    <br></td>    " ; 
}