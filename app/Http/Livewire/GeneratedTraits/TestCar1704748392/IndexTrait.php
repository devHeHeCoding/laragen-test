<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1704748392;

use App\Models\TestCar1704748392;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1704748392 $testCar1704748392;

    public function render()
    {
        $items = TestCar1704748392::paginate($this->perPage);

        return view('livewire.test-car1704748392.index', compact('items'));
    }

            public function delete(TestCar1704748392 $testCar1704748392): void
        {
                                                if ($testCar1704748392->testCar2836470273s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1704748392->delete();
        }
    }
