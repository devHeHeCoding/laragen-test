<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar973799022;

use App\Models\TestCar973799022;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar973799022 $testcar973799022;

    public function render()
    {
        $items = TestCar973799022::paginate($this->perPage);

        return view('livewire.testcar973799022.index', compact('items'));
    }
}
