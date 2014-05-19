<?php
namespace Bread\RADIUS\Authorization;

use Bread\Configuration\Manager as Configuration;

trait ExtendedProfile
{
    use Profile;
    
    protected $ntPassword;
    
    protected $radiusExpireAfter;
    
    protected $radiusLoginWithin;
    
    protected $radiusLoginWithinInterval;
}

Configuration::defaults('Bread\RADIUS\Authorization\ExtendedProfile', array(
    'properties' => array(
        'radiusExpireAfter' => array(
            'type' => 'integer'
        ),
        'radiusLoginWithin' => array(
            'type' => 'integer'
        ),
        'radiusLoginWithinInterval' => array(
            'type' => 'integer'
        )
    )
));