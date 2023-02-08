<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar742407724;

use App\Models\TestCar742407724;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar742407724 $testCar742407724;

    public function render()
    {
        $items = TestCar742407724::paginate($this->perPage);

        return view('livewire.generated.test-car742407724.index', compact('items'));
    }

            public function delete(TestCar742407724 $testCar742407724): void
        {
                                                if ($testCar742407724->testCar22086146743s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar742407724->delete();
        }
    }
