<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2105946856;

use App\Models\TestCar2105946856;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2105946856 $testCar2105946856;

    public function render()
    {
        $items = TestCar2105946856::paginate($this->perPage);

        return view('livewire.testcar2105946856.index', compact('items'));
    }

        public function delete(TestCar2105946856 $testCar2105946856): void
    {
                                    abort_if(
                    $testCar2105946856->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar2105946856->delete();
    }
    }
