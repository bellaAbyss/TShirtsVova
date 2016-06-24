<?php
/**
 * User: Maxim Kiryanov
 * Date: 5/29/16
 */

require_once("Mail.php");

try {
    $data = array();

    if (isset($_POST) && !empty($_POST['data']) || die)
        $data = json_decode($_POST['data'], true)["data"];

    $mail = new \mail\Mail();

    $mail->addPoint("name", $data["name"]);
    $mail->addPoint("phone", $data["phone"]);
    $mail->addPoint("email", $data["email"]);
    $mail->addPoint("delivery", $data["delivery"] == true ? "Да" : "Нет");
    $mail->addPoint("date", $data["date"]);
    $mail->addPoint("address", $data["address"]);
    $mail->addPoint("message", $data["message"]);

    $send = $mail->send();
    echo json_encode(array("status" => "OK", "send" => $send));
} catch (Error $e) {
    echo json_encode(array("status" => "Error"));
}