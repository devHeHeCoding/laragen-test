<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1485979483;

use App\Models\TestCar1485979483;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1485979483 $testCar1485979483;

    public function render()
    {
        $items = TestCar1485979483::paginate($this->perPage);

        return view('livewire.test-car1485979483.index', compact('items'));
    }

            public function delete(TestCar1485979483 $testCar1485979483): void
        {
                                                if ($testCar1485979483->testCar2154942925s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1485979483->delete();
        }
    }
