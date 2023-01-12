<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar250149536;

use App\Models\TestCar250149536;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar250149536 $testcar250149536;

    public function render()
    {
        $items = TestCar250149536::paginate($this->perPage);

        return view('livewire.testcar250149536.index', compact('items'));
    }
}
