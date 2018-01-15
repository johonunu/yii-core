<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\captcha;

/**
 * DriverInterface defines the common interface to be implemented by CAPTCHA rendering drivers.
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 2.1.0
 */
interface DriverInterface
{
    /**
     * Generates new CAPTCHA code.
     * @return string CAPTCHA code.
     */
    public function generateVerifyCode();

    /**
     * Renders the CAPTCHA image.
     * @param string $code CAPTCHA code
     * @return string image binary source.
     */
    public function renderImage($code);

    /**
     * Returns image MIME type for the content generated by [[renderImage()]].
     * @return string image MIME type.
     */
    public function getImageMimeType();
}