<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1936681020;

use App\Models\TestCar1936681020;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1936681020 $testCar1936681020;

    public function render()
    {
        $items = TestCar1936681020::paginate($this->perPage);

        return view('livewire.generated.test-car1936681020.index', compact('items'));
    }

            public function delete(TestCar1936681020 $testCar1936681020): void
        {
                                                if ($testCar1936681020->testCar21209726329s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1936681020->delete();
        }
    }
