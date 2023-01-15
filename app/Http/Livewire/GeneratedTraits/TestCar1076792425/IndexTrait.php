<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1076792425;

use App\Models\TestCar1076792425;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1076792425 $testcar1076792425;

    public function render()
    {
        $items = TestCar1076792425::paginate($this->perPage);

        return view('livewire.testcar1076792425.index', compact('items'));
    }

        public function delete(TestCar1076792425 $testcar1076792425): void
    {
                                    abort_if(
                    $testcar1076792425->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1076792425->delete();
    }
    }
