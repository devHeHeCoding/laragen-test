<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1400970972;

use App\Models\TestCar1400970972;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1400970972 $testCar1400970972;

    public function render()
    {
        $items = TestCar1400970972::paginate($this->perPage);

        return view('livewire.generated.test-car1400970972.index', compact('items'));
    }

            public function delete(TestCar1400970972 $testCar1400970972): void
        {
                                                if ($testCar1400970972->testCar21212099453s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1400970972->delete();
        }
    }
