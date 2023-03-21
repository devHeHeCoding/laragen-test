<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1059562808;

use App\Models\TestCar1059562808;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1059562808 $testCar1059562808;

    public function render()
    {
        $items = TestCar1059562808::paginate($this->perPage);

        return view('livewire.generated.test-car1059562808.index', compact('items'));
    }

            public function delete(TestCar1059562808 $testCar1059562808): void
        {
                                                if ($testCar1059562808->testCar21434870150s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1059562808->delete();
        }
    }
