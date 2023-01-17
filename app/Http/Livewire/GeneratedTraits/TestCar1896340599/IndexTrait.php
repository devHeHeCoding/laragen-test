<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1896340599;

use App\Models\TestCar1896340599;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1896340599 $testcar1896340599;

    public function render()
    {
        $items = TestCar1896340599::paginate($this->perPage);

        return view('livewire.test-car1896340599.index', compact('items'));
    }
}
