<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1302454223;

use App\Models\TestCar1302454223;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1302454223 $testCar1302454223;

    public function render()
    {
        $items = TestCar1302454223::paginate($this->perPage);

        return view('livewire.generated.test-car1302454223.index', compact('items'));
    }

            public function delete(TestCar1302454223 $testCar1302454223): void
        {
                                                if ($testCar1302454223->testCar2753418857s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1302454223->delete();
        }
    }
