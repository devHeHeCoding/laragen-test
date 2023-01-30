<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar660723101;

use App\Models\TestCar660723101;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar660723101 $testCar660723101;

    public function render()
    {
        $items = TestCar660723101::paginate($this->perPage);

        return view('livewire.test-car660723101.index', compact('items'));
    }

            public function delete(TestCar660723101 $testCar660723101): void
        {
                                                if ($testCar660723101->testCar2114732740s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar660723101->delete();
        }
    }
