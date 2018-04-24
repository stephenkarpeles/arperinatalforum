<?php
/**
 * ifeelweb.de WordPress Plugin Framework
 * For more information see http://www.ifeelweb.de/wp-plugin-framework
 * 
 * String helper class
 *
 * @author    Timo Reith <timo@ifeelweb.de>
 * @copyright Copyright (c) ifeelweb.de
 * @version   $Id: Version.php 565 2017-07-12 14:37:49Z timoreithde $
 * @package   IfwPsn_Util
 */ 
class IfwPsn_Util_String
{
    /**
     * @param $string
     * @return string
     */
    public static function compress($string)
    {
        if (function_exists('gzcompress')) {
            $string = gzcompress($string, 9);
        }

        return $string;
    }

    /**
     * @param $string
     * @return string
     */
    public static function uncompress($string)
    {
        if (function_exists('gzuncompress')) {
            $uncompressedString = gzuncompress($string);
            if ($uncompressedString !== false) {
                $string = $uncompressedString;
            }
        }

        return $string;
    }
}
