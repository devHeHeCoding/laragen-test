<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar512320321;

use App\Models\TestCar512320321;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar512320321 $testcar512320321;

    public function render()
    {
        $items = TestCar512320321::paginate($this->perPage);

        return view('livewire.testcar512320321.index', compact('items'));
    }
}
