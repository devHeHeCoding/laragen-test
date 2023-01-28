<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1748965950;

use App\Models\TestCar1748965950;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1748965950 $testCar1748965950;

    public function render()
    {
        $items = TestCar1748965950::paginate($this->perPage);

        return view('livewire.test-car1748965950.index', compact('items'));
    }

            public function delete(TestCar1748965950 $testCar1748965950): void
        {
                                                if ($testCar1748965950->testCar2431123825s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1748965950->delete();
        }
    }
