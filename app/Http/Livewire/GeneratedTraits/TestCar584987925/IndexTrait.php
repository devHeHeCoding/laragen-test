<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar584987925;

use App\Models\TestCar584987925;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar584987925 $testcar584987925;

    public function render()
    {
        $items = TestCar584987925::paginate($this->perPage);

        return view('livewire.testcar584987925.index', compact('items'));
    }
}
