<!--- conexão banco de dados -->
<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS','1234');
    define('BASE', 'first');

    $conn = new mysqli (HOST,USER,PASS,BASE);

    