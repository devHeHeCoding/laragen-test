<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1095306803;

use App\Models\TestCar1095306803;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1095306803 $testCar1095306803;

    public function render()
    {
        $items = TestCar1095306803::paginate($this->perPage);

        return view('livewire.test-car1095306803.index', compact('items'));
    }

            public function delete(TestCar1095306803 $testCar1095306803): void
        {
                                                if ($testCar1095306803->testCar2432013350s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1095306803->delete();
        }
    }
