<?php

$to = "pignon.adrien@gmail.com";
$from = $_POST['email'];
$message = $_POST['message'];
if(isset($_POST['message'])){
            $position_arobase=strpos($_POST['email'],'@');
            if($position_arobase===false)
                echo '<p>Votre email doit comporter un arobase.</p>';
            else {

              $headers = "From:".$from."\r\nReply-To:".$to."\r\nX-Mailer: PHP/" . phpversion();
                $retour= mail($to,'Envoi depuis page Contact", $message, $headers);
                if($retour)
                    echo '<p>Votre message a été envoyé.</p>';
                else
                    echo '<p>Erreur.</p>';
            }
        }
 ?>
