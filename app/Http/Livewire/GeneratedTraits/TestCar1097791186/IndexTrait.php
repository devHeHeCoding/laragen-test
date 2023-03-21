<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1097791186;

use App\Models\TestCar1097791186;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1097791186 $testCar1097791186;

    public function render()
    {
        $items = TestCar1097791186::paginate($this->perPage);

        return view('livewire.generated.test-car1097791186.index', compact('items'));
    }

            public function delete(TestCar1097791186 $testCar1097791186): void
        {
                                                if ($testCar1097791186->testCar2150718785s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1097791186->delete();
        }
    }
