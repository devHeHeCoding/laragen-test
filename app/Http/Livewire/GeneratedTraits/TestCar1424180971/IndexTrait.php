<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1424180971;

use App\Models\TestCar1424180971;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1424180971 $testCar1424180971;

    public function render()
    {
        $items = TestCar1424180971::paginate($this->perPage);

        return view('livewire.test-car1424180971.index', compact('items'));
    }

            public function delete(TestCar1424180971 $testCar1424180971): void
        {
                                                if ($testCar1424180971->testCar2211599076s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1424180971->delete();
        }
    }
