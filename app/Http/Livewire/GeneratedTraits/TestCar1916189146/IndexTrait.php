<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1916189146;

use App\Models\TestCar1916189146;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1916189146 $testCar1916189146;

    public function render()
    {
        $items = TestCar1916189146::paginate($this->perPage);

        return view('livewire.generated.test-car1916189146.index', compact('items'));
    }

            public function delete(TestCar1916189146 $testCar1916189146): void
        {
                                                if ($testCar1916189146->testCar21425585387s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1916189146->delete();
        }
    }
