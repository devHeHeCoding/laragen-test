<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1139604965;

use App\Models\TestCar1139604965;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1139604965 $testCar1139604965;

    public function render()
    {
        $items = TestCar1139604965::paginate($this->perPage);

        return view('livewire.generated.test-car1139604965.index', compact('items'));
    }

            public function delete(TestCar1139604965 $testCar1139604965): void
        {
                                                if ($testCar1139604965->testCar288403461s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1139604965->delete();
        }
    }
