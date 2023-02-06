<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1323929317;

use App\Models\TestCar1323929317;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1323929317 $testCar1323929317;

    public function render()
    {
        $items = TestCar1323929317::paginate($this->perPage);

        return view('livewire.test-car1323929317.index', compact('items'));
    }

            public function delete(TestCar1323929317 $testCar1323929317): void
        {
                                                if ($testCar1323929317->testCar2626485518s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1323929317->delete();
        }
    }
