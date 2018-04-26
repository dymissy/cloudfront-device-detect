<?php

namespace CloudFrontDeviceDetect;

function isDesktop()
{
    return (new Detector())->isDesktop();
}

function isTablet()
{
    return (new Detector())->isTablet();
}

function isMobile()
{
    return (new Detector())->isTablet();
}

function isSmartTV()
{
    return (new Detector())->isSmartTV();
}

function isMobileOrTablet()
{
    return (new Detector())->isMobileOrTablet();
}

function isDesktopOrTablet()
{
    return (new Detector())->isDesktopOrTablet();
}
