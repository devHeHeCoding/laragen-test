<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar457912317;

use App\Models\TestCar457912317;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar457912317 $testCar457912317;

    public function render()
    {
        $items = TestCar457912317::paginate($this->perPage);

        return view('livewire.generated.test-car457912317.index', compact('items'));
    }

            public function delete(TestCar457912317 $testCar457912317): void
        {
                                                if ($testCar457912317->testCar2823892517s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar457912317->delete();
        }
    }
