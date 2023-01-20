<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1992385173;

use App\Models\TestCar1992385173;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1992385173 $testCar1992385173;

    public function render()
    {
        $items = TestCar1992385173::paginate($this->perPage);

        return view('livewire.test-car1992385173.index', compact('items'));
    }

            public function delete(TestCar1992385173 $testCar1992385173): void
        {
                                                if ($testCar1992385173->testCar21734315086s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1992385173->delete();
        }
    }
