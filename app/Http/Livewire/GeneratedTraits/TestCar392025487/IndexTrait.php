<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar392025487;

use App\Models\TestCar392025487;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar392025487 $testCar392025487;

    public function render()
    {
        $items = TestCar392025487::paginate($this->perPage);

        return view('livewire.test-car392025487.index', compact('items'));
    }

            public function delete(TestCar392025487 $testCar392025487): void
        {
                                                if ($testCar392025487->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar392025487->delete();
        }
    }
