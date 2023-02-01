<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1556346522;

use App\Models\TestCar1556346522;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1556346522 $testCar1556346522;

    public function render()
    {
        $items = TestCar1556346522::paginate($this->perPage);

        return view('livewire.test-car1556346522.index', compact('items'));
    }

            public function delete(TestCar1556346522 $testCar1556346522): void
        {
                                                if ($testCar1556346522->testCar2530127545s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1556346522->delete();
        }
    }
