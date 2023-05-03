<?php

use Alexvkokin\Patterns\Structured\Decorator\OrderCreate;
use Alexvkokin\Patterns\Structured\Decorator\OrderDecorator;

(new OrderDecorator(new OrderCreate()))->save();
