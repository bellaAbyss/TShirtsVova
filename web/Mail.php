<?php
/**
 * User: Maxim Kiryanov
 * Date: 6/4/16 at 4:21 PM
 */

namespace mail;

class Mail
{
    private $subject;
    private $to;
    private $config_file = __DIR__ . "/mail.ini";

    private $i18n = array(
        "name" => "Имя",
        "phone" => "Телефон",
        "email" => "Почта",
        "delivery" => "Доставка",
        "date" => "Дата",
        "address" => "Адрес",
        "message" => "Сообщение"
    );

    private $message = "";

    function __construct()
    {
        if (file_exists($this->config_file)) {
            $properties = parse_ini_file($this->config_file);
            $this->subject = $properties['subject'];
            $this->to = $properties['to'];
        } else {
            $this->defaults();
        }
    }

    function defaults()
    {
        $this->subject = "Заказ от";
        $this->to = "vanin.rabota@yandex.ru";
    }

    function addPoint($key, $value)
    {
        if ($key === "phone")
        {
            $this->subject .= " " . $value;
        }
        $this->message .= $this->i18n[$key] . " : " . $value . "\n";
    }

    function send()
    {
        return mail($this->to, $this->subject, $this->message);
    }
}