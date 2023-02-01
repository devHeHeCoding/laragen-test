<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar266619430;

use App\Models\TestCar266619430;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar266619430 $testCar266619430;

    public function render()
    {
        $items = TestCar266619430::paginate($this->perPage);

        return view('livewire.test-car266619430.index', compact('items'));
    }

            public function delete(TestCar266619430 $testCar266619430): void
        {
                                                if ($testCar266619430->testCar21581190465s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar266619430->delete();
        }
    }
