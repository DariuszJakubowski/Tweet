<?php
session_start();
require_once './src/functions/functions.php';
redirectIfNotLogged();

if(isset($_POST['tweet'])) {
    require_once './src/classes/autoload.php';
    $text_tweet = $_POST['tweet'];
    $conn = DataBase::connect();
    $tweet = new Tweet();
    $tweet->addText($conn, $text_tweet, $_SESSION['id_user']);
}
redirectHome();

