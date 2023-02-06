<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1546476527;

use App\Models\TestCar1546476527;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1546476527 $testCar1546476527;

    public function render()
    {
        $items = TestCar1546476527::paginate($this->perPage);

        return view('livewire.test-car1546476527.index', compact('items'));
    }

            public function delete(TestCar1546476527 $testCar1546476527): void
        {
                                                if ($testCar1546476527->testCar22105699980s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1546476527->delete();
        }
    }
