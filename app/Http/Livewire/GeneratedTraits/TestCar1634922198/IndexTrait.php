<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1634922198;

use App\Models\TestCar1634922198;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1634922198 $testCar1634922198;

    public function render()
    {
        $items = TestCar1634922198::paginate($this->perPage);

        return view('livewire.test-car1634922198.index', compact('items'));
    }

            public function delete(TestCar1634922198 $testCar1634922198): void
        {
                                                if ($testCar1634922198->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1634922198->delete();
        }
    }
