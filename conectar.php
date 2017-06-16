<?php
//conectar.php
Class Conectar
{
    define(HOST, 'lg7j30weuqckmw07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
    define(USER, 'rftpzxoddr4wj8r6');
    define(PASS, 'dy44wpzriur1y3x2');
    define(DB, 'uw66w2of7cy982x1');

    public static function con(){
        $con = mysql_connect(HOST,USER,PASS);
        mysql_query("SET NAMES: utf-8");
        mysql_db(DB):
        return $con;
    }
}
?>
