<?php

namespace ZhangY\Test;

/**
 * Test
 *
 * Class Test
 * @package ZhangY\Test
 */
class Test
{

    /**
     * Test
     *
     * @param $ip
     */
    public static function test($ip)
    {
        $location = \Jormin\IP\IP::ip2addr($ip, '');
        var_dump($location);
    }
}
