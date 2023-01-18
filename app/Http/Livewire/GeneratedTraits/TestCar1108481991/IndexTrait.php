<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1108481991;

use App\Models\TestCar1108481991;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1108481991 $testCar1108481991;

    public function render()
    {
        $items = TestCar1108481991::paginate($this->perPage);

        return view('livewire.test-car1108481991.index', compact('items'));
    }

            public function delete(TestCar1108481991 $testCar1108481991): void
        {
                                                if ($testCar1108481991->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1108481991->delete();
        }
    }
