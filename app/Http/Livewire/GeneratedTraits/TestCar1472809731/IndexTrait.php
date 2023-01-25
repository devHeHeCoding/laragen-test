<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1472809731;

use App\Models\TestCar1472809731;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1472809731 $testCar1472809731;

    public function render()
    {
        $items = TestCar1472809731::paginate($this->perPage);

        return view('livewire.test-car1472809731.index', compact('items'));
    }

            public function delete(TestCar1472809731 $testCar1472809731): void
        {
                                                if ($testCar1472809731->testCar2183601022s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1472809731->delete();
        }
    }
