<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1521752398;

use App\Models\TestCar1521752398;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1521752398 $testCar1521752398;

    public function render()
    {
        $items = TestCar1521752398::paginate($this->perPage);

        return view('livewire.test-car1521752398.index', compact('items'));
    }

            public function delete(TestCar1521752398 $testCar1521752398): void
        {
                                                if ($testCar1521752398->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1521752398->delete();
        }
    }
