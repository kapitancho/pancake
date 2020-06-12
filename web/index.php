<?php

namespace MaBaker\EntryPoint;

use MaBaker\Main\Config;

require_once __DIR__ . '/../autoload.php';
Config::webPancakeService()->handle($_GET);