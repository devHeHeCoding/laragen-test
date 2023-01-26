<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1006792630;

use App\Models\TestCar1006792630;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1006792630 $testCar1006792630;

    public function render()
    {
        $items = TestCar1006792630::paginate($this->perPage);

        return view('livewire.test-car1006792630.index', compact('items'));
    }

            public function delete(TestCar1006792630 $testCar1006792630): void
        {
                                                if ($testCar1006792630->testCar21347663798s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1006792630->delete();
        }
    }
