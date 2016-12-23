<?php
/**
 * Created by PhpStorm.
 * User: speedup
 * Date: 2016-12-23
 * Time: 오후 5:01
 */

class Radio
{
    public $channel;
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }
    public function receiveRadio()
    {
        echo $this->channel." 로부터 받습니다.";
    }
}

$radio = new Radio();
$radio->setChannel("91.9");
$radio->receiveRadio();
$radio->channel = "61";
$radio->receiveRadio();

