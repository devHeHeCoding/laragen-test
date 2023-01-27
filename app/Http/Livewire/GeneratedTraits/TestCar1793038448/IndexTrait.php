<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1793038448;

use App\Models\TestCar1793038448;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1793038448 $testCar1793038448;

    public function render()
    {
        $items = TestCar1793038448::paginate($this->perPage);

        return view('livewire.test-car1793038448.index', compact('items'));
    }

            public function delete(TestCar1793038448 $testCar1793038448): void
        {
                                                if ($testCar1793038448->testCar2663105981s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1793038448->delete();
        }
    }
