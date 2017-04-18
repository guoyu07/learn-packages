<?php
/**
 * Created by PhpStorm.
 * User: space
 * Date: 2017/4/18
 * Time: 下午1:27
 */

namespace Isnail\Hasher;

class MD5Hasher
{
    /**
     * @param $value
     * @param array $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt);
    }

    /**
     * @param $value
     * @param $hashvalue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashvalue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt) === $hashvalue;
    }
}