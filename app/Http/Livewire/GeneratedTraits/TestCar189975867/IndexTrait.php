<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar189975867;

use App\Models\TestCar189975867;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar189975867 $testCar189975867;

    public function render()
    {
        $items = TestCar189975867::paginate($this->perPage);

        return view('livewire.test-car189975867.index', compact('items'));
    }

            public function delete(TestCar189975867 $testCar189975867): void
        {
                                                if ($testCar189975867->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar189975867->delete();
        }
    }
