<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar210297364;

use App\Models\TestCar210297364;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar210297364 $testcar210297364;

    public function render()
    {
        $items = TestCar210297364::paginate($this->perPage);

        return view('livewire.testcar210297364.index', compact('items'));
    }
}
