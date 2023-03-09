<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar738781303;

use App\Models\TestCar738781303;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar738781303 $testCar738781303;

    public function render()
    {
        $items = TestCar738781303::paginate($this->perPage);

        return view('livewire.generated.test-car738781303.index', compact('items'));
    }

            public function delete(TestCar738781303 $testCar738781303): void
        {
                                                if ($testCar738781303->testCar2956586136s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar738781303->delete();
        }
    }
