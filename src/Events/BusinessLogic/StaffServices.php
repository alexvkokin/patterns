<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Events\BusinessLogic;

use Alexvkokin\Patterns\Events\Dispatchers\SimpleDispatch;
use Alexvkokin\Patterns\Events\Events\CreateUserEvent;
use Alexvkokin\Patterns\Events\Events\UpdateUserEvent;

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