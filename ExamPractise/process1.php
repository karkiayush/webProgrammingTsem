<!DOCTYPE html>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $Name = $_POST['name'];
        $UserId = $_POST["uid"];
        $Password = $_POST["pw"];

        $fp = fopen('information.txt', 'a');
        fwrite($fp, $Name);
        fwrite($fp, "<br/>");
        fwrite($fp, $UserId."<br/>");
        fwrite($fp, $Password);
        // fwrite($fp, "<br/>");


        echo readfile("information.txt");
    }
    ?>
</body>

</html>