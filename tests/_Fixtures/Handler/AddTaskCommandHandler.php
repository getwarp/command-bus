<?php

declare(strict_types=1);

namespace spaceonfire\CommandBus\_Fixtures\Handler;

use spaceonfire\CommandBus\_Fixtures\Command\AddTaskCommand;

class AddTaskCommandHandler
{
    /**
     * @param AddTaskCommand $command
     * @return mixed|void
     * @noinspection PhpUnusedParameterInspection
     */
    public function handle(AddTaskCommand $command)
    {
        return 'foobar';
    }
}
