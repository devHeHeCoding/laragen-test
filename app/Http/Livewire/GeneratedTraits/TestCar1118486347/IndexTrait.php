<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1118486347;

use App\Models\TestCar1118486347;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1118486347 $testcar1118486347;

    public function render()
    {
        $items = TestCar1118486347::paginate($this->perPage);

        return view('livewire.testcar1118486347.index', compact('items'));
    }
}
