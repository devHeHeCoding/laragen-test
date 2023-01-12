<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1015982843;

use App\Models\TestCar1015982843;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1015982843 $testcar1015982843;

    public function render()
    {
        $items = TestCar1015982843::paginate($this->perPage);

        return view('livewire.testcar1015982843.index', compact('items'));
    }
}
