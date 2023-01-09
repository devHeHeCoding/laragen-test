<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1195108868;

use App\Models\TestCar1195108868;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1195108868 $testcar1195108868;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1195108868.index', compact('items'));
    }
}
