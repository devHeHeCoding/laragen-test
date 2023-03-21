<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2085255194;

use App\Models\TestCar2085255194;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2085255194 $testCar2085255194;

    public function render()
    {
        $items = TestCar2085255194::paginate($this->perPage);

        return view('livewire.generated.test-car2085255194.index', compact('items'));
    }

            public function delete(TestCar2085255194 $testCar2085255194): void
        {
                                                if ($testCar2085255194->testCar21959135682s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2085255194->delete();
        }
    }
