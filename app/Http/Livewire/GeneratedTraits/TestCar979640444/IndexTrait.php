<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar979640444;

use App\Models\TestCar979640444;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar979640444 $testcar979640444;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar979640444.index', compact('items'));
    }
}
