<html>
    <body>
        <form action="" method="post">
            bomba 1 <input type="submit" name="encender18" value="encender">
            <input type="submit" name="apagar18" value="apagar">
</body>
</html>
<?php
if ($_POST[encender18]){
    $a- exec("sudo python /var/www/html/enceder18.py");
    echo $a;
}
if ($_POST[apagar18]){
    $a- exec("sudo python /var/www/html/apagar18.py");
    echo $a;
}