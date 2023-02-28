<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1070024050;

use App\Models\TestCar1070024050;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1070024050 $testCar1070024050;

    public function render()
    {
        $items = TestCar1070024050::paginate($this->perPage);

        return view('livewire.generated.test-car1070024050.index', compact('items'));
    }

            public function delete(TestCar1070024050 $testCar1070024050): void
        {
                                                if ($testCar1070024050->testCar21210797441s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1070024050->delete();
        }
    }
