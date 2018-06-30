<?php

    DEFINE('HOST','localhost');
    DEFINE('USER','root');
    DEFINE('PASS','');
    DEFINE('DB','banding_kampus');
    /**
     *
     */
    class Database_Connection{

      function __construct(){
          $con = mysql_connect(HOST, USER, PASS);
          $db = mysql_select_db(DB,$con);
      }
    }


?>
