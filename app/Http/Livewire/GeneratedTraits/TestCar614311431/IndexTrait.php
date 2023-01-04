<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar614311431;

use App\Models\TestCar614311431;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar614311431 $testcar614311431;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar614311431.index', compact('items'));
    }
}
