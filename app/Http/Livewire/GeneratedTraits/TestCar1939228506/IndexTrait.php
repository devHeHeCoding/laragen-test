<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1939228506;

use App\Models\TestCar1939228506;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1939228506 $testCar1939228506;

    public function render()
    {
        $items = TestCar1939228506::paginate($this->perPage);

        return view('livewire.test-car1939228506.index', compact('items'));
    }

            public function delete(TestCar1939228506 $testCar1939228506): void
        {
                                                if ($testCar1939228506->testCar21207075299s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1939228506->delete();
        }
    }
