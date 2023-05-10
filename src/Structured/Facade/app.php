<?php
declare(strict_types=1);

use Alexvkokin\Patterns\Structured\Facade\OrderFacade;

require_once __DIR__ . '/../../../vendor/autoload.php';

(new OrderFacade())->save();