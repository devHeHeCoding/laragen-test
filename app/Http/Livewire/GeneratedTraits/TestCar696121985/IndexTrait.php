<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar696121985;

use App\Models\TestCar696121985;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar696121985 $testcar696121985;

    public function render()
    {
        $items = TestCar696121985::paginate($this->perPage);

        return view('livewire.testcar696121985.index', compact('items'));
    }
}
