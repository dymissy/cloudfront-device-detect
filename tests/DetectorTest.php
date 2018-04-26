<?php

namespace CloudFrontDeviceDetect;

use PHPUnit\Framework\TestCase;

class DetectorTest extends TestCase
{
    /**
     * @test
     */
    public function should_detect_desktop_device()
    {
        $detector = new Detector(['HTTP_CLOUDFRONT_IS_DESKTOP_VIEWER' => 1]);

        $this->assertTrue($detector->isDesktop());
        $this->assertTrue($detector->isDesktopOrTablet());
        $this->assertFalse($detector->isMobile());
        $this->assertFalse($detector->isTablet());
        $this->assertFalse($detector->isSmartTV());
        $this->assertFalse($detector->isMobileOrTablet());
    }

    /**
     * @test
     */
    public function should_detect_tablet_device()
    {
        $detector = new Detector(['HTTP_CLOUDFRONT_IS_TABLET_VIEWER' => 1]);

        $this->assertTrue($detector->isTablet());
        $this->assertTrue($detector->isDesktopOrTablet());
        $this->assertTrue($detector->isMobileOrTablet());
        $this->assertFalse($detector->isDesktop());
        $this->assertFalse($detector->isMobile());
        $this->assertFalse($detector->isSmartTV());
    }

    /**
     * @test
     */
    public function should_detect_mobile_device()
    {
        $detector = new Detector(['HTTP_CLOUDFRONT_IS_MOBILE_VIEWER' => 1]);

        $this->assertTrue($detector->isMobile());
        $this->assertTrue($detector->isMobileOrTablet());
        $this->assertFalse($detector->isDesktopOrTablet());
        $this->assertFalse($detector->isTablet());
        $this->assertFalse($detector->isDesktop());
        $this->assertFalse($detector->isSmartTV());
    }

    /**
     * @test
     */
    public function should_detect_smart_tv_device()
    {
        $detector = new Detector(['HTTP_CLOUDFRONT_IS_SMARTTV_VIEWER' => 1]);

        $this->assertTrue($detector->isSmartTV());
        $this->assertFalse($detector->isMobile());
        $this->assertFalse($detector->isMobileOrTablet());
        $this->assertFalse($detector->isDesktopOrTablet());
        $this->assertFalse($detector->isTablet());
        $this->assertFalse($detector->isDesktop());
    }
}