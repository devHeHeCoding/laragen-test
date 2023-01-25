<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar164808530;

use App\Models\TestCar164808530;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar164808530 $testCar164808530;

    public function render()
    {
        $items = TestCar164808530::paginate($this->perPage);

        return view('livewire.test-car164808530.index', compact('items'));
    }

            public function delete(TestCar164808530 $testCar164808530): void
        {
                                                if ($testCar164808530->testCar21801769660s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar164808530->delete();
        }
    }
