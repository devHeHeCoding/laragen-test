<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1019581192;

use App\Models\TestCar1019581192;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1019581192 $testcar1019581192;

    public function render()
    {
        $items = TestCar1019581192::paginate($this->perPage);

        return view('livewire.test-car1019581192.index', compact('items'));
    }
}
