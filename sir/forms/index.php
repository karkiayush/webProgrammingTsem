<!DOCTYPE html>

<html>
  <head>
    <title>PHP functions</title>
  </head>

  <body>

  <?php
  if( isset($_POST["mode"]) )
  {
    if($_POST["mode"] == "process")
        include("process.php");
     
    else
        include("error.php");
  }
  
  else
      include("form.php");  
  
    
  ?>
    
    
    

  
  </body>
  
</html>