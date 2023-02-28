<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar132168106;

use App\Models\TestCar132168106;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar132168106 $testCar132168106;

    public function render()
    {
        $items = TestCar132168106::paginate($this->perPage);

        return view('livewire.generated.test-car132168106.index', compact('items'));
    }

            public function delete(TestCar132168106 $testCar132168106): void
        {
                                                if ($testCar132168106->testCar2152474347s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar132168106->delete();
        }
    }
