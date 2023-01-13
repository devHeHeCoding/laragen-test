<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar226442035;

use App\Models\TestCar226442035;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar226442035 $testcar226442035;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar226442035.index', compact('items'));
    }
}
