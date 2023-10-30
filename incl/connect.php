<?php
    const HOST = 'localhost';
    const DBNAME = 'z696';
    const USERNAME = 'tnid4jHKSepEZDsP';
    const PASSWORD = 'z696';
    const CHARSET = 'utf8';

    const DSN = 'mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=' . CHARSET;
    $connect= new PDO(DSN, USERNAME, PASSWORD);
?>
