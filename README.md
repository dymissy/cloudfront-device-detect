Cloudfront Device Detect  [![Build Status](https://travis-ci.org/ideatosrl/cloudfront-device-detect.svg?branch=master)](https://travis-ci.org/ideatosrl/cloudfront-device-detect)
------------

Detect devices based on CloudFront caching headers. More info on CloudFront headers are available [here](https://docs.aws.amazon.com/AmazonCloudFront/latest/DeveloperGuide/header-caching.html#header-caching-web-device).

## How to use

    $detector = new \CloudFrontDeviceDetect\Detector();
    
    $detector->isDesktop();
    $detector->isDesktopOrTablet();
    $detector->isMobile();
    $detector->isTablet();
    $detector->isSmartTV();
    $detector->isMobileOrTablet();
    
## Helpers

If you want to use the library with default settings you can use helper functions as follows:

    use CloudFrontDeviceDetect;
    
    isDesktop();
    isDesktopOrTablet();
    isMobile();
    isTablet();
    isSmartTV();
    isMobileOrTablet();
    
Requirements
------------

PHP 7.1 or above

Authors
-------

* Simone D'Amico <sd@ideato.it>
* [other contributors](https://github.com/ideatosrl/cloudfront-device-detect/graphs/contributors)

License
-------

The library is licensed under the MIT License
