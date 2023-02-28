<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1376813211;

use App\Models\TestCar1376813211;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1376813211 $testCar1376813211;

    public function render()
    {
        $items = TestCar1376813211::paginate($this->perPage);

        return view('livewire.generated.test-car1376813211.index', compact('items'));
    }

            public function delete(TestCar1376813211 $testCar1376813211): void
        {
                                                if ($testCar1376813211->testCar21823395211s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1376813211->delete();
        }
    }
