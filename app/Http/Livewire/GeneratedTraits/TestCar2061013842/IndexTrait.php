<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2061013842;

use App\Models\TestCar2061013842;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2061013842 $testcar2061013842;

    public function render()
    {
        $items = TestCar2061013842::paginate($this->perPage);

        return view('livewire.testcar2061013842.index', compact('items'));
    }
}
