<style>
    /* Table here.... */
table {
  border-collapse: separate;
  border-spacing: 3;
  color: #4a4a4d;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.platform_info_table{
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
<table id= "example" class= "platform_info_table" style= "width: %100">
<thead>
        <tr>
            <th scope="col"> Bargained Platform </th>

            <br>
        </tr>
    </thead>
    <tbody>
    <html\>

<?php
include "config.php"; 
$platform_id = $_GET["id"];
$sql_statement = "SELECT * FROM platform WHERE platform_id ='$platform_id'";
$result = mysqli_query($db, $sql_statement);


while($row = mysqli_fetch_assoc($result)) { // Iterating the result

    $platform_id = $row['platform_id']; 
    $platform = $row['platform_name']; 
  
    $sql_statement = "SELECT * FROM lists_on NATURAL JOIN platform WHERE album_id ='$album_id'";
    $result = mysqli_query($db, $sql_statement);
            while($row = mysqli_fetch_assoc($result)) { // Iterating the result
                $publisher=$row['platform_name'];
                echo "<tr><td>$publisher</td>
                <br>";
                } 
                  

}
?>