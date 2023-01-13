<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1770167685;

use App\Models\TestCar1770167685;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1770167685 $testcar1770167685;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1770167685.index', compact('items'));
    }

        public function delete(TestCar1770167685 $testcar1770167685): void
    {
        $user->delete();
    }
    }
