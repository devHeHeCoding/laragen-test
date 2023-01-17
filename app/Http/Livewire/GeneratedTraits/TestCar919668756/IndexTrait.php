<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar919668756;

use App\Models\TestCar919668756;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar919668756 $testcar919668756;

    public function render()
    {
        $items = TestCar919668756::paginate($this->perPage);

        return view('livewire.test-car919668756.index', compact('items'));
    }
}
