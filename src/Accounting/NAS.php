<?php
namespace Bread\RADIUS\Accounting;

use Bread\Configuration\Manager as Configuration;

trait NAS
{

    protected $id;

    protected $nasname;

    protected $shortname;

    protected $type;

    protected $ports;

    protected $secret;

    protected $server;

    protected $community;

    protected $description;
}

Configuration::defaults('Bread\RADIUS\Accounting\NAS', array(
    'keys' => array(
        'id'
    ),
    'properties' => array(
        'id' => array(
            'type' => 'integer',
            'strategy' => array(
                'autoincrement' => true
            )
        ),
        'nasname' => array(
            'type' => 'string',
            'required' => true
        ),
        'shortname' => array(
            'type' => 'string'
        ),
        'type' => array(
            'type' => 'string',
            'default' => 'other'
        ),
        'ports' => array(
            'type' => 'integer'
        ),
        'secret' => array(
            'type' => 'string',
            'required' => true,
            'default' => 'secret'
        ),
        'server' => array(
            'type' => 'string'
        ),
        'community' => array(
            'type' => 'string'
        ),
        'description' => array(
            'type' => 'text',
            'default' => 'RADIUS Client'
        )
    )
));
