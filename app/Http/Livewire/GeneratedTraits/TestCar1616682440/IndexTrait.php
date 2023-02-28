<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1616682440;

use App\Models\TestCar1616682440;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1616682440 $testCar1616682440;

    public function render()
    {
        $items = TestCar1616682440::paginate($this->perPage);

        return view('livewire.generated.test-car1616682440.index', compact('items'));
    }

            public function delete(TestCar1616682440 $testCar1616682440): void
        {
                                                if ($testCar1616682440->testCar21637026723s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1616682440->delete();
        }
    }
