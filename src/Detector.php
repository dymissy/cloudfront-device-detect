<?php

namespace CloudFrontDeviceDetect;

class Detector
{
    const DESKTOP_HEADER = 'HTTP_CLOUDFRONT_IS_DESKTOP_VIEWER';
    const TABLET_HEADER = 'HTTP_CLOUDFRONT_IS_TABLET_VIEWER';
    const MOBILE_HEADER = 'HTTP_CLOUDFRONT_IS_MOBILE_VIEWER';
    const SMART_TV_HEADER = 'HTTP_CLOUDFRONT_IS_SMARTTV_VIEWER';

    /**
     * @var array
     */
    private $headers = [];

    /**
     * Detector constructor.
     *
     * @param array $headers
     */
    public function __construct($headers = null)
    {
        if (empty($headers)) {
            $headers = $_SERVER;
        }

        $this->headers = $headers;
    }

    /**
     * @return bool
     */
    public function isDesktop()
    {
        return $this->is(self::DESKTOP_HEADER);
    }

    /**
     * @return bool
     */
    public function isTablet()
    {
        return $this->is(self::TABLET_HEADER);
    }

    /**
     * @return bool
     */
    public function isMobile()
    {
        return $this->is(self::MOBILE_HEADER);
    }

    /**
     * @return bool
     */
    public function isSmartTV()
    {
        return $this->is(self::SMART_TV_HEADER);
    }

    /**
     * @return bool
     */
    public function isMobileOrTablet()
    {
        return $this->isMobile() || $this->isTablet();
    }

    /**
     * @return bool
     */
    public function isDesktopOrTablet()
    {
        return $this->isDesktop() || $this->isTablet();
    }

    private function is($device)
    {
        return isset($this->headers[$device])
            && $this->headers[$device] === 'true';
    }
}