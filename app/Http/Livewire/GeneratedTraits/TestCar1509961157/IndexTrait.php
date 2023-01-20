<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1509961157;

use App\Models\TestCar1509961157;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1509961157 $testCar1509961157;

    public function render()
    {
        $items = TestCar1509961157::paginate($this->perPage);

        return view('livewire.test-car1509961157.index', compact('items'));
    }

            public function delete(TestCar1509961157 $testCar1509961157): void
        {
                                                if ($testCar1509961157->testCar21984856770s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1509961157->delete();
        }
    }
