<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/17
 * Time: 11:07
 */
namespace App\Services;
use App\Contracts\Mailer;
class MailService implements Mailer{
    function send($append){
        dd("send mail",$append);
    }
    function receive($append){
        dd("receive mail",$append);
    }
}