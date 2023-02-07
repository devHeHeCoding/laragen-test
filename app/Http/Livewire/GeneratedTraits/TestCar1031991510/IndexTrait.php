<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1031991510;

use App\Models\TestCar1031991510;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1031991510 $testCar1031991510;

    public function render()
    {
        $items = TestCar1031991510::paginate($this->perPage);

        return view('livewire.generated.test-car1031991510.index', compact('items'));
    }

            public function delete(TestCar1031991510 $testCar1031991510): void
        {
                                                if ($testCar1031991510->testCar2743089764s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1031991510->delete();
        }
    }
