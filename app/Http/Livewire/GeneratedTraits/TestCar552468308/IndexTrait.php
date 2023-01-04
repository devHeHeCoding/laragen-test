<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar552468308;

use App\Models\TestCar552468308;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar552468308 $testcar552468308;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar552468308.index', compact('items'));
    }
}
