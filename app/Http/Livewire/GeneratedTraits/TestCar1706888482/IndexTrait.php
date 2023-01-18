<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1706888482;

use App\Models\TestCar1706888482;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1706888482 $testCar1706888482;

    public function render()
    {
        $items = TestCar1706888482::paginate($this->perPage);

        return view('livewire.test-car1706888482.index', compact('items'));
    }

            public function delete(TestCar1706888482 $testCar1706888482): void
        {
                                                if ($testCar1706888482->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1706888482->delete();
        }
    }
