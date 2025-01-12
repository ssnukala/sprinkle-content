<?php

/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */

/*
 * Core configuration file for UserFrosting.  You must override/extend this in your site's configuration file.
 *
 * Sensitive credentials should be stored in an environment variable or your .env file.
 * Database password: DB_PASSWORD
 * SMTP server password: SMTP_PASSWORD
 */
return [
    'timezone' => 'America/Chicago',
    'site' => [
        'title' => 'Content@UF',
        'author' => 'Srinivas Nukala',
        'maintenance' => false,
        'UFSkin' => [
            'sadmin' => 'red rs-sadmin-body',
            'admin' => 'green rs-admin-body',
            'teacher' => 'purple rs-teacher-body',
            'frontdesk' => 'yellow rs-frontdesk-body',
        ],
        'global_assets' => [
            'js' => [
                'js/content/util'
            ],
            'css' => [
                'css/content/styles'
            ]
        ]
    ],
    'content' => [
        'notify' => 'Y',
        'expire' => 100,
        //http://patorjk.com/software/taag/#p=display&f=Calvin%20S&t=Capable%20Campaigns
        'bakery_title' =>
        "
        .!._
                                    /O*@*O\
                                <\@(_)@/>
                        ,;,   .--;`     `;--.   ,
                        O@O_ /   | O   O |   \ _hnn
                        | `/ \   |       |   / \` |
                        &&&&  :##;\     /;##;  &&&&
                        |  \ / `##/|   |##'  \ /  |
                        \   %%%%`</|   |#'`%%%%   /
                        '._|_ \   |   |'  / _|_.'
                            _/  /   \   \   \  \
                            / (\(     '.  '-._&&&&
                        (  ()##,    o'--.._`\-)
                            '-():`##########'()()()
                            /:::::/()`Y`()\:::::\
                            \::::( () | () )::::/

╔═╗┬ ┬┬┌┐┌┌┬┐┌─┐┬ ┬┌─┐  ╔╦╗┬┌─┐┌─┐┬┌─┐┌┐┌       ┌─┐╔╗ ┌─┐┬  ┌─┐┬  ┬┬┬ ┬┌─┐┬─┐
║  ├─┤│││││││├─┤└┬┘├─┤  ║║║│└─┐└─┐││ ││││  ───  ├┤ ╠╩╗├─┤│  ├─┤└┐┌┘│├─┤├─┤├┬┘
╚═╝┴ ┴┴┘└┘┴ ┴┴ ┴ ┴ ┴ ┴  ╩ ╩┴└─┘└─┘┴└─┘┘└┘       └─┘╚═╝┴ ┴┴─┘┴ ┴ └┘ ┴┴ ┴┴ ┴┴└─
        ",
    ],

];