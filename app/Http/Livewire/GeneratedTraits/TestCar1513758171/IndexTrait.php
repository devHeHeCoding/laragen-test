<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1513758171;

use App\Models\TestCar1513758171;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1513758171 $testCar1513758171;

    public function render()
    {
        $items = TestCar1513758171::paginate($this->perPage);

        return view('livewire.test-car1513758171.index', compact('items'));
    }

            public function delete(TestCar1513758171 $testCar1513758171): void
        {
                                                if ($testCar1513758171->testCar21969794356s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1513758171->delete();
        }
    }
