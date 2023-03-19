<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1975829433;

use App\Models\TestCar1975829433;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1975829433 $testCar1975829433;

    public function render()
    {
        $items = TestCar1975829433::paginate($this->perPage);

        return view('livewire.generated.test-car1975829433.index', compact('items'));
    }

            public function delete(TestCar1975829433 $testCar1975829433): void
        {
                                                if ($testCar1975829433->testCar21615015628s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1975829433->delete();
        }
    }
