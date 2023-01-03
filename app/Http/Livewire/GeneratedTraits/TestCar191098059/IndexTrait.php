<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar191098059;

use App\Models\TestCar191098059;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar191098059 $testcar191098059;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar191098059.index', compact('items'));
    }
}
