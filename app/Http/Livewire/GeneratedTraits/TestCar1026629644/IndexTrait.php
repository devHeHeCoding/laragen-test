<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1026629644;

use App\Models\TestCar1026629644;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1026629644 $testCar1026629644;

    public function render()
    {
        $items = TestCar1026629644::paginate($this->perPage);

        return view('livewire.test-car1026629644.index', compact('items'));
    }

            public function delete(TestCar1026629644 $testCar1026629644): void
        {
                                                if ($testCar1026629644->testCar2126819650s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1026629644->delete();
        }
    }
