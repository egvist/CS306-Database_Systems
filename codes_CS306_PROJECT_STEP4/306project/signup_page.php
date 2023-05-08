<html\>
</font>
<p><font face = "courier" size = "2" color = "#000000">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background: #3887FF;
}

.content {
  max-width: 1200px;
  margin: auto;
  background: #D6EAF8;
  padding: 150px;
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


</style>
</head>
<body>

<div class="content">
<div>
</div>



<center>
<h1> Sign Up </h1>
<br>
<form action="signup_bh.php" method="POST"> 
    User Name: 
    <br>
    <input type="text" id="username" name="username">
    <br>
     Password: 
    <br>
    <input type="text" id="password" name="password">
    <br>
    <button  value="Submit",button class ="button button1">Sign Up</button>
    <br>
</form> 
</center>
</div>
</font>

</p>
</body>

</html>
<script>
function returnsearch()
        {
            window.location.href = 'index.php';
            return false;
        }
        function returndelete()
        {   
            window.location.href = 'deletemusic.php';
            return false;
        }
</script>