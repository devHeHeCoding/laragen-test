<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1685974392;

use App\Models\TestCar1685974392;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1685974392 $testCar1685974392;

    public function render()
    {
        $items = TestCar1685974392::paginate($this->perPage);

        return view('livewire.testcar1685974392.index', compact('items'));
    }

        public function delete(TestCar1685974392 $testCar1685974392): void
    {
                                    abort_if(
                    $testCar1685974392->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1685974392->delete();
    }
    }
