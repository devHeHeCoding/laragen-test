<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1621691636;

use App\Models\TestCar1621691636;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1621691636 $testCar1621691636;

    public function render()
    {
        $items = TestCar1621691636::paginate($this->perPage);

        return view('livewire.test-car1621691636.index', compact('items'));
    }

            public function delete(TestCar1621691636 $testCar1621691636): void
        {
                                                if ($testCar1621691636->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1621691636->delete();
        }
    }
