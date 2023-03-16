<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1879614189;

use App\Models\TestCar1879614189;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1879614189 $testCar1879614189;

    public function render()
    {
        $items = TestCar1879614189::paginate($this->perPage);

        return view('livewire.generated.test-car1879614189.index', compact('items'));
    }

            public function delete(TestCar1879614189 $testCar1879614189): void
        {
                                                if ($testCar1879614189->testCar21990806046s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1879614189->delete();
        }
    }
