<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar146246608;

use App\Models\TestCar146246608;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar146246608 $testCar146246608;

    public function render()
    {
        $items = TestCar146246608::paginate($this->perPage);

        return view('livewire.testcar146246608.index', compact('items'));
    }

        public function delete(TestCar146246608 $testCar146246608): void
    {
                                    abort_if(
                    $testCar146246608->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar146246608->delete();
    }
    }
