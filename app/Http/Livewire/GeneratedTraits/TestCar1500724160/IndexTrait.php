<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1500724160;

use App\Models\TestCar1500724160;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1500724160 $testCar1500724160;

    public function render()
    {
        $items = TestCar1500724160::paginate($this->perPage);

        return view('livewire.test-car1500724160.index', compact('items'));
    }

            public function delete(TestCar1500724160 $testCar1500724160): void
        {
                                                if ($testCar1500724160->testCar21476805943s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1500724160->delete();
        }
    }
