<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1618233239;

use App\Models\TestCar1618233239;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1618233239 $testCar1618233239;

    public function render()
    {
        $items = TestCar1618233239::paginate($this->perPage);

        return view('livewire.test-car1618233239.index', compact('items'));
    }

            public function delete(TestCar1618233239 $testCar1618233239): void
        {
                                                if ($testCar1618233239->testCar21116646297s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1618233239->delete();
        }
    }
