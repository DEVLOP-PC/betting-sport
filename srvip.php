<?php
/**
 * Created by PhpStorm.
 * User: amine
 * Date: 24/01/16
 * Time: 04:23
 */
$external_ip = exec('curl http://ipecho.net/plain; echo');
echo $external_ip;