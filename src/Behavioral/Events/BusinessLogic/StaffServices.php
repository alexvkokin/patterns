<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Behavioral\Events\BusinessLogic;

use Alexvkokin\Patterns\Behavioral\Events\Dispatchers\SimpleDispatch;
use Alexvkokin\Patterns\Behavioral\Events\Events\CreateUserEvent;
use Alexvkokin\Patterns\Behavioral\Events\Events\UpdateUserEvent;

class StaffServices
{
    public function __construct(
        public readonly SimpleDispatch $eventDispatcher,
    ) {
    }

    public function createUser(): void
    {
        var_dump('Creating user business logic');
        $this->eventDispatcher->dispatch(new CreateUserEvent());
    }

    public function updateUser(): void
    {
        var_dump('Creating user business logic');
        $this->eventDispatcher->dispatch(new UpdateUserEvent());
    }
}