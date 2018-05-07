<?php

namespace CloudFrontDeviceDetect;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /**
     * @test
     */
    public function helpers_functions_should_be_called_successfully()
    {
        $_SERVER['HTTP_CLOUDFRONT_IS_DESKTOP_VIEWER'] = 'true';
        $_SERVER['HTTP_CLOUDFRONT_IS_TABLET_VIEWER'] = 'false';
        $_SERVER['HTTP_CLOUDFRONT_IS_MOBILE_VIEWER'] = 'false';
        $_SERVER['HTTP_CLOUDFRONT_IS_SMARTTV_VIEWER'] = 'false';

        $this->assertTrue(isDesktop());
        $this->assertTrue(isDesktopOrTablet());
        $this->assertFalse(isMobile());
        $this->assertFalse(isTablet());
        $this->assertFalse(isSmartTV());
        $this->assertFalse(isMobileOrTablet());
    }
}