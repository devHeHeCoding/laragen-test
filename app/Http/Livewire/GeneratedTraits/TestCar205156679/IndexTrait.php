<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar205156679;

use App\Models\TestCar205156679;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar205156679 $testcar205156679;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar205156679.index', compact('items'));
    }
}
