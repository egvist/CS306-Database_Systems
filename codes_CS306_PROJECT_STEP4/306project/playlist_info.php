<?php
    include "config.php";
?>

<!DOCTYPE html>

<html>

  <p><font face = "courier" size = "2" color = "#000000">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

</html>

<body>
  <div class="content">
    
    <style>

    body {
            margin: 0;
              
            font-family: "Source Sans Pro", sans-serif ;
            min-height: 100vh;
            display: grid;
            place-content: center;
            text-align: center;
            background: #d6eaf8;
          }
          
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        position: -webkit-sticky; /* Safari */
        position: sticky;
        top: 0;
      }

      li {
        float: left;
      }

      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      /* Change the link color to #111 (black) on hover */
      li a:hover {
        background-color: #111;
      }

      .active {
        background-color: #3887FF;
      }



      .content {
        max-width: 1200px;
        margin: auto;
        background: #D6EAF8;
        padding: auto;
      }
      button {
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
            } 
        .button1 {
        background-color: white; 
        color: #3887FF; 
        border: 2px solid #3887FF;
      }

      .button1:hover {
        background-color: #95BFFF;
        color: #3887FF;
      }
      




      h1 {

        
      font-size: clamp(1rem, 3vw + 1rem, 4rem);

      position: relative;
      font-family: "Source Code Pro", monospace;
      background: black;
      -webkit-text-fill-color: transparent;
      -webkit-background-clip: text;
      position: relative;
      width: max-content;
      }

      h1::before,

      h1::after{
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left:0;

      }

      h1::before{
        background: #d6eaf8;
        animation: typewriter 6s steps(19) 1s forwards;

      }

      h1::after{
        width: 0.070em;
        background: black;
        animation: 
        typewriter 6s steps(19) 1s forwards,
        blink 750ms steps(19) infinite;

      }

      @keyframes typewriter {
      to{
        left: 100%;
      }}



      @keyframes blink {
      to{
        background: transparent;
      }}



    </style>

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


<center>
    <h1 class="text"> Playlist Info</h1>
    </h1>
    <ul>
    <li><a href="welcome.php">Home</a></li>
    <li><a href="music_page.php">Music</a></li>
    <li><a href="artist_page.php">Artist</a></li>
    <li><a href="album_page.php">Album</a></li>
    <li><a href="producer_page.php">Producer</a></li>
    <li><a href="publisher_page.php">Publisher</a></li>
    <li><a href="playlist_page.php">Playlist</a></li>
    <li style="float:right"><a class="active" href="support.php">Support</a></li>
    </ul>
</center>



<?php
include "config.php"; 
$playlist_id = $_GET["id"];
$sql_statement = "SELECT * FROM playlist WHERE playlist_id ='$playlist_id'";
$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $playlist_id = $row['playlist_id']; 
    $playlist_title = $row['playlist_title']; 
    $playlist_likes = $row['playlist_likes'];
    $total_duration = $row['total_duration']; 
    $n_of_songs = $row['n_of_songs'];

    include "playlist_info_table.php";
  
  
  
              

                          
                    
       
  } 
//echo $music_id;
//artist, album, producer
?>

<html\>
<table id= "example" class= "music_info_table" style= "width: %100">
<thead>
        <tr>
            <th scope="col"> Have Music  </th>

            <br>
        </tr>
    </thead>
    <tbody>
    <html\>

<?php
include "config.php"; 
$playlist_id = $_GET["id"];
$sql_statement = "SELECT * FROM have WHERE playlist_id ='$playlist_id'";
$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
  $sql_statement = "SELECT * FROM have NATURAL JOIN music WHERE playlist_id ='$playlist_id'";
  $result = mysqli_query($db, $sql_statement);
          while($row = mysqli_fetch_assoc($result)) { // Iterating the result
              $music_name=$row['music_name'];
              $music_id =$row['music_id'];
              echo "  <tr><td><a href='musicinfo.php?id=$music_id'> $music_name </a></td>
              <br>";
              } 
            }

            ?>