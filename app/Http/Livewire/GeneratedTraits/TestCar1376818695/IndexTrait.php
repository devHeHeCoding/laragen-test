<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1376818695;

use App\Models\TestCar1376818695;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1376818695 $testCar1376818695;

    public function render()
    {
        $items = TestCar1376818695::paginate($this->perPage);

        return view('livewire.generated.test-car1376818695.index', compact('items'));
    }

            public function delete(TestCar1376818695 $testCar1376818695): void
        {
                                                if ($testCar1376818695->testCar2165075592s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1376818695->delete();
        }
    }
