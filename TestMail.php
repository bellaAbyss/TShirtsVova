<?php
/**
 * User: Maxim Kiryanov
 * Date: 5/29/16
 */
if (isset($_POST) && !empty($_POST['data']) || die)
    $data = json_decode($_POST['data']);

echo json_encode($data);

class Mail {

}
