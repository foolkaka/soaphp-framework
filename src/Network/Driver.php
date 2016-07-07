<?php
namespace Swoole\Network;

interface Driver
{
    function run($setting);
    function send($client_id, $data);
    function close($client_id);
    function shutdown();
    function setProtocol($protocol);
}