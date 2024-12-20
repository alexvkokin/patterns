<?php
declare(strict_types=1);

use Alexvkokin\Patterns\Generics\Collection;
use Alexvkokin\Patterns\Generics\Factories\ElectricGuitarFactory;
use Alexvkokin\Patterns\Generics\Instruments\FlyingVGuitar;
use Alexvkokin\Patterns\Generics\Instruments\ExpensiveViolin;
use Alexvkokin\Patterns\Generics\HashSet;

require_once __DIR__ . "/../../vendor/autoload.php";


/** @var Collection<int> $numbers */
$numbers = new Collection();
$numbers->add(1);
$numbers->add(2);
$numbers->add(3);
$numbers->add(4);
$numbers->add('some string'); //Psalm - InvalidArgument - expects int, but 'some string' provided


/** @var Collection<string> $strings */
$strings = new Collection();
$strings->add('hello');
$strings->add('world');
$strings->add(1); // psalm: InvalidArgument: expects string, but 1 provided


// factories
$factory = new ElectricGuitarFactory(FlyingVGuitar::class);
$guitar = $factory->make();

$factory2 = new ElectricGuitarFactory(ExpensiveViolin::class); // psalm: InvalidArgument: Argument 1
$violin = $factory2->make();
var_dump($guitar, $violin);

/** @var HashSet<int, string> $hash */
$hash = new HashSet();
$hash->set(0, 'php');
$hash->set(1, 'js');
$hash->set('first', 'hello'); // psalm: InvalidArgument: Argument 1 expects int, but 'first' provided


