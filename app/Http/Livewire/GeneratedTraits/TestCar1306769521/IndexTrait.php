<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1306769521;

use App\Models\TestCar1306769521;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1306769521 $testCar1306769521;

    public function render()
    {
        $items = TestCar1306769521::paginate($this->perPage);

        return view('livewire.test-car1306769521.index', compact('items'));
    }

            public function delete(TestCar1306769521 $testCar1306769521): void
        {
                                                if ($testCar1306769521->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1306769521->delete();
        }
    }
