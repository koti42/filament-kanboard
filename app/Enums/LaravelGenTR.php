<?php

namespace App\Enums;

use Mokhosh\FilamentKanban\Concerns\IsKanbanStatus;

enum LaravelGenTR: string
{
    use IsKanbanStatus;

    case Todo = 'Todo';
    case Doing = 'Doing';
    case Done = 'Done';
}
