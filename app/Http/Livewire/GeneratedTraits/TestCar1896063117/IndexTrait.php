<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1896063117;

use App\Models\TestCar1896063117;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1896063117 $testCar1896063117;

    public function render()
    {
        $items = TestCar1896063117::paginate($this->perPage);

        return view('livewire.test-car1896063117.index', compact('items'));
    }

            public function delete(TestCar1896063117 $testCar1896063117): void
        {
                                                if ($testCar1896063117->testCar21559840196s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1896063117->delete();
        }
    }
