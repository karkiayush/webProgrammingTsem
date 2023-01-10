<?php
  $mytitle = "Profile using PHP arrays";
  include("top.php")
?>

  <body>
    <?php
      $people = array(array("name" => "Krishna Murari",
                      "faculty" => "IT",
                      "semester" => 3,
                      "pic"=>"krishna.jpg"),
                      array("name" => "Shyam Sudar",
                      "faculty" => "Civil",
                      "semester" => 4,
                      "pic"=>"shyam.jpg"),
                      array("name" => "HareRam Prajuli",
                      "faculty" => "Computer",
                      "semester" => 5,
                      "pic"=>"hareram.jpg")
                      );
    
    foreach($people as $k => $v)
    {
      echo "\n<div class=\"person\">";
      
      echo "\n<div class=\"ppic\">\n";
      echo "<img src=\"" . $v["pic"] . "\">";
      echo "\n</div>";
      
      echo "\n<div class=\"pname\">\n";
      echo $v["name"];
      echo "\n</div>";
      
      echo "\n<div class=\"pfaculty\">\n";
      echo $v["faculty"];
      echo "\n</div>\n";
      
      echo "\n<div class=\"psemester\">\n";
      echo $v["semester"];
      echo "\n</div>";

      echo "\n</div>";
    }
    
    ?>
    
    
    
    
  </body>
</html>
