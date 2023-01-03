<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar425811051;

use App\Models\TestCar425811051;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar425811051 $testcar425811051;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar425811051.index', compact('items'));
    }
}
