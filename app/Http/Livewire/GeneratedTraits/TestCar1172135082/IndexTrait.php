<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1172135082;

use App\Models\TestCar1172135082;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1172135082 $testCar1172135082;

    public function render()
    {
        $items = TestCar1172135082::paginate($this->perPage);

        return view('livewire.generated.test-car1172135082.index', compact('items'));
    }

            public function delete(TestCar1172135082 $testCar1172135082): void
        {
                                                if ($testCar1172135082->testCar22052845737s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1172135082->delete();
        }
    }
