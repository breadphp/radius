<?php
namespace Bread\RADIUS\Authorization;

use Bread\LDAP\Traits\CommonName;
use Bread\Configuration\Manager as Configuration;

trait Profile
{
    /*
     * Cannot use CommonName if it's used by other traits in the using class
     * @see https://bugs.php.net/bug.php?id=63911
    use CommonName;
     */

    protected $dialupAccess = 1;

    protected $radiusArapFeatures;

    protected $radiusArapSecurity;

    protected $radiusArapZoneAccess;

    protected $radiusAuthType;

    protected $radiusCallbackId;

    protected $radiusCallbackNumber;

    protected $radiusCalledStationId;

    protected $radiusCallingStationId;

    protected $radiusCheckItem = array();

    protected $radiusClass;

    protected $radiusClientIPAddress;

    protected $radiusExpiration;

    protected $radiusFilterId;

    protected $radiusFramedAppleTalkLink;

    protected $radiusFramedAppleTalkNetwork;

    protected $radiusFramedAppleTalkZone;

    protected $radiusFramedCompression;

    protected $radiusFramedIPAddress;

    protected $radiusFramedIPNetmask;

    protected $radiusFramedIPXNetwork;

    protected $radiusFramedMTU;

    protected $radiusFramedProtocol;

    protected $radiusFramedRoute;

    protected $radiusFramedRouting;

    protected $radiusGroupName;

    protected $radiusHint;

    protected $radiusHuntgroupName;

    protected $radiusIdleTimeout;

    protected $radiusLoginIPHost;

    protected $radiusLoginLATGroup;

    protected $radiusLoginLATNode;

    protected $radiusLoginLATPort;

    protected $radiusLoginLATService;

    protected $radiusLoginService;

    protected $radiusLoginTCPPort;

    protected $radiusLoginTime;

    protected $radiusNASIpAddress;

    protected $radiusPasswordRetry;

    protected $radiusPortLimit;

    protected $radiusProfileDn;

    protected $radiusPrompt;

    protected $radiusProxyToRealm;

    protected $radiusRealm;

    protected $radiusReplicateToRealm;

    protected $radiusReplyItem;

    protected $radiusReplyMessage;

    protected $radiusServiceType;

    protected $radiusSessionTimeout;

    protected $radiusSimultaneousUse;

    protected $radiusStripUserName;

    protected $radiusTerminationAction;

    protected $radiusTunnelAssignmentId;

    protected $radiusTunnelClientEndpoint;

    protected $radiusTunnelMediumType;

    protected $radiusTunnelPassword;

    protected $radiusTunnelPreference;

    protected $radiusTunnelPrivateGroupId;

    protected $radiusTunnelServerEndpoint;

    protected $radiusTunnelType;

    protected $radiusUserCategory;

    protected $radiusVSA;
}

Configuration::defaults('Bread\RADIUS\Authorization\Profile', array(
    'properties' => array(
        'dialupAccess' => array(
            'type' => 'integer'
        ),
        'radiusExpiration' => array(
            'type' => 'Bread\Types\DateTime'
        ),
        'radiusCheckItem' => array(
            'multiple' => true
        ),
        'radiusIdleTimeout' => array(
            'type' => 'integer'
        ),
        'radiusSessionTimeout' => array(
            'type' => 'integer'
        ),
        'radiusSimultaneousUse' => array(
            'type' => 'integer'
        )
    )
));