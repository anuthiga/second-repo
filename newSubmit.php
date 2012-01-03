<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body><form method="post">
        <input type="text" id="name" name="name"/><br/><br/><input type ="submit" id="submit" name="submit" value="Submit"/></form>
        <?php
        include 'cong.php';
        // put your code here
        if(isset($_POST['submit']))
        {
            
            echo $name = $_POST['name'];
        }
        $insert = mysql_query("INSERT INTO tbl_first (NAME) VALUES ('$name')");
        ?>
    </body>
</html>