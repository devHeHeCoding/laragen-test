<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar196262789;

use App\Models\TestCar196262789;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar196262789 $testCar196262789;

    public function render()
    {
        $items = TestCar196262789::paginate($this->perPage);

        return view('livewire.test-car196262789.index', compact('items'));
    }

            public function delete(TestCar196262789 $testCar196262789): void
        {
                                                if ($testCar196262789->testCar2601764815s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar196262789->delete();
        }
    }
