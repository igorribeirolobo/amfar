<?php

	$conn = 'mysql:host=mysql01.amfar.com.br;dbname=amfar';

     
        try{

            $db = new PDO($conn, 'amfar','amf10web20');

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {

            echo $e->getMessage();

        }

?>

