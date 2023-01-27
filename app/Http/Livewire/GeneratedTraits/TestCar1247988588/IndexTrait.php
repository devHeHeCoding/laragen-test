<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1247988588;

use App\Models\TestCar1247988588;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1247988588 $testCar1247988588;

    public function render()
    {
        $items = TestCar1247988588::paginate($this->perPage);

        return view('livewire.test-car1247988588.index', compact('items'));
    }

            public function delete(TestCar1247988588 $testCar1247988588): void
        {
                                                if ($testCar1247988588->testCar2309701042s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1247988588->delete();
        }
    }
