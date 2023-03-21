<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1347878297;

use App\Models\TestCar1347878297;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1347878297 $testCar1347878297;

    public function render()
    {
        $items = TestCar1347878297::paginate($this->perPage);

        return view('livewire.generated.test-car1347878297.index', compact('items'));
    }

            public function delete(TestCar1347878297 $testCar1347878297): void
        {
                                                if ($testCar1347878297->testCar21070472401s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1347878297->delete();
        }
    }
