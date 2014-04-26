<?php

include '../passwd/service-ids.inc.php';
require '../passwd/phile-passwd.inc.php';


$config['encryptionKey'] = $_PHILE_ENC_KEY;
// try to figure out the install path
$config['base_url']       = \Phile\Utility::getBaseUrl(); // use the Utility class to guess the base_url
$config['site_title']     = 'lxl.io'; // Site title
$config['theme']          = 'pico-pure'; // Set the theme
$config['date_format']    = 'jS M Y'; // Set the PHP date format
$config['pages_order_by'] = 'meta:date'; // Order pages by "title" (alpha) or "date"
$config['pages_order']    = 'desc'; // Order pages "asc" or "desc"

// figure out the timezone
$config['timezone']       = (ini_get('date.timezone')) ? ini_get('date.timezone') : 'UTC'; // The default timezone

// only extend $config['plugins'] and not overwrite it, because some core plugins
// will be added to this config option by default. So, use this option in this way:
// $config['plugins']['myCustomPlugin'] = array('active' => true);
// also notice, each plugin has its own config namespace.
// activate plugins
$config['plugins'] = array(
    // the default parser
    'phile\\parserMarkdown'            => array('active' => true),
    // the default parser
    'phile\\parserMeta'                => array('active' => true),
    // the default template engine
    'phile\\templateTwig'              => array('active' => true),
    // the default cache engine
    'phile\\phpFastCache'              => array('active' => true),
    // the default data storage engine
    'phile\\simpleFileDataPersistence' => array('active' => true),
    'phile\\contentVariables'          => array('active' => true),
    'phile\\rssFeed'                   => array('active' => true),
    'phile\\twigFilters'               => array('active' => true),
    // Mine
    'pschmitt\\tableOfContents'        => array('active' => true),
    'pschmitt\\piwik'                  => array('active' => true,
                                                'piwik_hide_aliases' => true),
    'pschmitt\\users'                  => array('active' => true,
                                                'users'  => $_PHILE_USERS,
                                                'rights' => $_PHILE_RIGHTS),
    'pschmitt\\tags'                   => array('active' => true),
    'pschmitt\\share'                  => array('active' => true),
    'pschmitt\\disqus'                 => array('active' => true,
                                                'disqus_id' => $_DISQUS_ID),
);

return $config;
