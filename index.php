<?php

// overwrite rootdir since phile resides in phile/ and not the root
define('ROOT_DIR', __DIR__ . DIRECTORY_SEPARATOR);

require_once ROOT_DIR . 'phile' . DIRECTORY_SEPARATOR . 'index.php';
