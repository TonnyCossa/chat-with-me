<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if (!empty($message)) {
            # code...
            $sql = mysqli_query($conn, "INSERT INTO grupo (msg, outgoing_msg_id, incoming_msg_id) VALUES('{$message}',{$outgoing_id},{$incoming_id})") or die();
        }
    }else{
        header("../login.php");
    }
