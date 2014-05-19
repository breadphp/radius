<?php
namespace Bread\RADIUS\Accounting;

use Bread\Configuration\Manager as Configuration;

trait Session
{

    protected $radacctid;

    protected $acctsessionid;

    protected $acctuniqueid;

    protected $username;

    protected $groupname;

    protected $realm;

    protected $nasipaddress;

    protected $nasportid;

    protected $nasporttype;

    protected $acctstarttime;

    protected $acctstoptime;

    protected $acctsessiontime;

    protected $acctauthentic;

    protected $connectinfo_start;

    protected $connectinfo_stop;

    protected $acctinputoctets;

    protected $acctoutputoctets;

    protected $calledstationid;

    protected $callingstationid;

    protected $acctterminatecause;

    protected $servicetype;

    protected $framedprotocol;

    protected $framedipaddress;

    protected $acctstartdelay;

    protected $acctstopdelay;

    protected $xascendsessionsvrkey;
}

Configuration::defaults('Bread\RADIUS\Accounting\Session', array(
    'keys' => array(
        'radacctid'
    ),
    'properties' => array(
        'nasportid' => array(
            'type' => 'integer'
        ),
        'acctstarttime' => array(
            'type' => 'DateTime'
        ),
        'acctstoptime' => array(
            'type' => 'DateTime'
        ),
        'acctsessiontime' => array(
            'type' => 'integer'
        ),
        'acctinputoctets' => array(
            'type' => 'integer'
        ),
        'acctoutputoctets' => array(
            'type' => 'integer'
        ),
        'acctstartdelay' => array(
            'type' => 'integer'
        ),
        'acctstopdelay' => array(
            'type' => 'integer'
        )
    )
));
