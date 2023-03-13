<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1198457234;

use App\Models\TestCar1198457234;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1198457234 $testCar1198457234;

    public function render()
    {
        $items = TestCar1198457234::paginate($this->perPage);

        return view('livewire.generated.test-car1198457234.index', compact('items'));
    }

            public function delete(TestCar1198457234 $testCar1198457234): void
        {
                                                if ($testCar1198457234->testCar22048804554s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1198457234->delete();
        }
    }
