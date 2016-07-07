<?php

if (! function_exists('getOS')) {
    function getOS()
    {
        if (PHP_OS == 'WINNT')
        {
            return new \Swoole\Platform\Windows();
        }
        else
        {
            return new \Swoole\Platform\Linux();
        }
    }
}

