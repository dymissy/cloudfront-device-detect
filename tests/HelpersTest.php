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
        $_SERVER['HTTP_CLOUDFRONT_IS_DESKTOP_VIEWER'] = 1;

        $this->assertTrue(isDesktop());
        $this->assertTrue(isDesktopOrTablet());
        $this->assertFalse(isMobile());
        $this->assertFalse(isTablet());
        $this->assertFalse(isSmartTV());
        $this->assertFalse(isMobileOrTablet());
    }
}