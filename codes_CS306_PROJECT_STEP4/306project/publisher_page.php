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
        animation: typewriter 6s steps(11) 1s forwards;

      }

      h1::after{
        width: 0.070em;
        background: black;
        animation: 
        typewriter 6s steps(11) 1s forwards,
        blink 750ms steps(11) infinite;

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

    <center>
    <h1 class="text"> biblioteque</h1>
    </h1>
    <ul>
    <li><a href="welcome.php">Home</a></li>
    <li><a href="music_page.php">Music</a></li>
    <li><a href="artist_page.php">Artist</a></li>
    <li><a href="album_page.php">Album</a></li>
    <li><a href="producer_page.php">Producer</a></li>
    <li><a href="publisher_page.php">Publisher</a></li>
    <li><a href="playlist_page.php">Playlist</a></li>
    <li style="float:right"  ><a class="active" href="login.php">Log out</a></li>
    <li style="float:right"><a class="active" href="support.php">Support</a></li>
    </ul>

      

      <br>


      <form action="publisher_page.php" method="POST"> 
      Publisher Name: 
      <input type="text" id="box" name="p_name">		 
      <button  value="Submit",button class ="button button1">Search</button> 
    </form>
      </form>
      </center>
      <br>
      <br>
    
    <center>
      <?php
          include "publisher.php";
      ?>
    </center>

    </html>
  </div>

</font>

</p>
</body>

</html>

