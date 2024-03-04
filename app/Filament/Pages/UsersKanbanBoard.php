<?php

namespace App\Filament\Pages;

use App\Enums\LaravelGenTR;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Mokhosh\FilamentKanban\Pages\KanbanBoard;

class UsersKanbanBoard extends KanbanBoard
{
    protected static string $model = User::class;
    protected static string $recordTitleAttribute = 'name';

    protected static string $recordStatusAttribute = 'status';

    protected static ?string $navigationLabel ='Todo List(Laravel.gen.tr)';
    protected static ?string $title='Laravel.gen.tr';

    protected static string $statusEnum = LaravelGenTR::class;

    protected function records(): Collection
    {
        return User::latest()->get();
    }


    public function onStatusChanged(int $recordId, string $status, array $fromOrderedIds, array $toOrderedIds): void
    {
        User::find($recordId)->update(['status'=>$status]);
    }

    public function onSortChanged(int $recordId, string $status, array $orderedIds): void
    {
        // User::setNewOrder($orderedIds);
    }
}
