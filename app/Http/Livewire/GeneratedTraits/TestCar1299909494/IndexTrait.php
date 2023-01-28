<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1299909494;

use App\Models\TestCar1299909494;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1299909494 $testCar1299909494;

    public function render()
    {
        $items = TestCar1299909494::paginate($this->perPage);

        return view('livewire.test-car1299909494.index', compact('items'));
    }

            public function delete(TestCar1299909494 $testCar1299909494): void
        {
                                                if ($testCar1299909494->testCar2409047978s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1299909494->delete();
        }
    }
