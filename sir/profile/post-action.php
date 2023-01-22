<?php
  $mytitle = "Output";
  include("top.php")
?>

  <body>
    
    <?php
    
    if(isset($_POST["FullName"]))
      echo $_POST["FullName"];
    else
      echo "Dhat!!!";
    
    ?>
    
  </body>
</html>