<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1632870290;

use App\Models\TestCar1632870290;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1632870290 $testcar1632870290;

    public function render()
    {
        $items = TestCar1632870290::paginate($this->perPage);

        return view('livewire.test-car1632870290.index', compact('items'));
    }
}
