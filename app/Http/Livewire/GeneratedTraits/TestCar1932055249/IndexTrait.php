<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1932055249;

use App\Models\TestCar1932055249;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1932055249 $testcar1932055249;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1932055249.index', compact('items'));
    }

        public function delete(TestCar1932055249 $testcar1932055249): void
    {
        $user->delete();
    }
    }
