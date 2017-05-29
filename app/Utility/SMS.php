<?php
/**
 * Created by mantegh.co
 * User: amirbakhtiari
 * Date: 29/08/2016
 * Time: 10:45 AM
 */

namespace App\Utility;

use SoapClient;

class SMS
{

//    private $senderNumbers = array("30006708910910");
    private $recipientNumbers;
    private $msg;
    private $urlWSDL = "http://smsapp.ir/webservice/v2.asmx?WSDL";
    private $client;
    private $status;
    private $isEnable;

    private function __construct() {}
    private function __clone() {}

    public static function getInstance() {
        return new self;
    }

    public function setRecipient($number, $msg) {
        $this->isEnable = strtolower(env('SMS_ACTIVE'));

        if(empty($number) || empty($msg)) {
            throw new \Exception('number and message required');
            exit;
        }

        try {
            $this->client = new SoapClient($this->urlWSDL);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        $this->recipientNumbers = array($number);
        $this->msg = array($msg);
        return $this;
    }

    public function send() {
        if(strcmp($this->isEnable, 'on') == 0)
            $this->status = $this->client->SendSMS($this->params());
        return $this;
    }

    public function status() {
        return $this->status;
    }

    private function params() {
        return  array(
            'username' 	=> env('SMS_USER_NAME'),
            'password' 	=> env('SMS_PASSWORD'),
            'senderNumbers' => array(env('SMS_SENDER_NUMBER')),
            'recipientNumbers'=> $this->recipientNumbers,
            'messageBodies' => $this->msg
        );
    }

    public function __toString() {
        return __CLASS__;
    }
}