<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1105510463;

use App\Models\TestCar1105510463;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1105510463 $testCar1105510463;

    public function render()
    {
        $items = TestCar1105510463::paginate($this->perPage);

        return view('livewire.generated.test-car1105510463.index', compact('items'));
    }

            public function delete(TestCar1105510463 $testCar1105510463): void
        {
                                                if ($testCar1105510463->testCar2700197140s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1105510463->delete();
        }
    }
