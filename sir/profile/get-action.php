<?php
  $mytitle = "Output";
  include("top.php")
?>

  <body>
    
    <?php
    
    if(isset($_GET["FullName"]))
      echo $_GET["FullName"];
    else
      echo "Dhat!!!";
    
    ?>
    
  </body>
</html>