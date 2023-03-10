<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1460715364;

use App\Models\TestCar1460715364;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1460715364 $testCar1460715364;

    public function render()
    {
        $items = TestCar1460715364::paginate($this->perPage);

        return view('livewire.generated.test-car1460715364.index', compact('items'));
    }

            public function delete(TestCar1460715364 $testCar1460715364): void
        {
                                                if ($testCar1460715364->testCar2628440140s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1460715364->delete();
        }
    }
