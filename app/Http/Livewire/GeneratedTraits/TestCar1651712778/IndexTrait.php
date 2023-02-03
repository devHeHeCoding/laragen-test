<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1651712778;

use App\Models\TestCar1651712778;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1651712778 $testCar1651712778;

    public function render()
    {
        $items = TestCar1651712778::paginate($this->perPage);

        return view('livewire.test-car1651712778.index', compact('items'));
    }

            public function delete(TestCar1651712778 $testCar1651712778): void
        {
                                                if ($testCar1651712778->testCar21978836217s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1651712778->delete();
        }
    }
