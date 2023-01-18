<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar749866031;

use App\Models\TestCar749866031;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar749866031 $testcar749866031;

    public function render()
    {
        $items = TestCar749866031::paginate($this->perPage);

        return view('livewire.test-car749866031.index', compact('items'));
    }
}
