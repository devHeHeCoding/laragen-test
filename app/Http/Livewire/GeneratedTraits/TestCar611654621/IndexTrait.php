<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar611654621;

use App\Models\TestCar611654621;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar611654621 $testCar611654621;

    public function render()
    {
        $items = TestCar611654621::paginate($this->perPage);

        return view('livewire.testcar611654621.index', compact('items'));
    }

        public function delete(TestCar611654621 $testCar611654621): void
    {
                                    abort_if(
                    $testCar611654621->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar611654621->delete();
    }
    }
