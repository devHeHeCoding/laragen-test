<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1693477620;

use App\Models\TestCar1693477620;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1693477620 $testCar1693477620;

    public function render()
    {
        $items = TestCar1693477620::paginate($this->perPage);

        return view('livewire.testcar1693477620.index', compact('items'));
    }

        public function delete(TestCar1693477620 $testCar1693477620): void
    {
                                    abort_if(
                    $testCar1693477620->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1693477620->delete();
    }
    }
