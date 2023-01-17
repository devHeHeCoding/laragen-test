<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar799656306;

use App\Models\TestCar799656306;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar799656306 $testcar799656306;

    public function render()
    {
        $items = TestCar799656306::paginate($this->perPage);

        return view('livewire.testcar799656306.index', compact('items'));
    }
}
