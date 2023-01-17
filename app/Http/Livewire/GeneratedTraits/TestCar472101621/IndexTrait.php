<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar472101621;

use App\Models\TestCar472101621;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar472101621 $testCar472101621;

    public function render()
    {
        $items = TestCar472101621::paginate($this->perPage);

        return view('livewire.test-car472101621.index', compact('items'));
    }

        public function delete(TestCar472101621 $testCar472101621): void
    {
                                    abort_if(
                    $testCar472101621->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar472101621->delete();
    }
    }
