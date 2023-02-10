<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1624949126;

use App\Models\TestCar1624949126;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1624949126 $testCar1624949126;

    public function render()
    {
        $items = TestCar1624949126::paginate($this->perPage);

        return view('livewire.test-car1624949126.index', compact('items'));
    }

            public function delete(TestCar1624949126 $testCar1624949126): void
        {
                                                if ($testCar1624949126->testCar21344149064s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1624949126->delete();
        }
    }
