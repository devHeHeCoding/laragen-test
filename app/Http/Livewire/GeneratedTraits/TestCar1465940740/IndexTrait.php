<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1465940740;

use App\Models\TestCar1465940740;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1465940740 $testcar1465940740;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1465940740.index', compact('items'));
    }
}
