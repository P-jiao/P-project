<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/17
 * Time: 11:06
 */
namespace App\Contracts;
interface Mailer{
    function send($append);
    function receive($append);
}