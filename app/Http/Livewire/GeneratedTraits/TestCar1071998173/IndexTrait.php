<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1071998173;

use App\Models\TestCar1071998173;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1071998173 $testCar1071998173;

    public function render()
    {
        $items = TestCar1071998173::paginate($this->perPage);

        return view('livewire.generated.test-car1071998173.index', compact('items'));
    }

            public function delete(TestCar1071998173 $testCar1071998173): void
        {
                                                if ($testCar1071998173->testCar22133327760s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1071998173->delete();
        }
    }
