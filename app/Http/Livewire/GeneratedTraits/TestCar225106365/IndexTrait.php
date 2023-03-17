<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar225106365;

use App\Models\TestCar225106365;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar225106365 $testCar225106365;

    public function render()
    {
        $items = TestCar225106365::paginate($this->perPage);

        return view('livewire.generated.test-car225106365.index', compact('items'));
    }

            public function delete(TestCar225106365 $testCar225106365): void
        {
                                                if ($testCar225106365->testCar2279493822s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar225106365->delete();
        }
    }
