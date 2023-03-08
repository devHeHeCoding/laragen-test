<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar18914160;

use App\Models\TestCar18914160;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar18914160 $testCar18914160;

    public function render()
    {
        $items = TestCar18914160::paginate($this->perPage);

        return view('livewire.generated.test-car18914160.index', compact('items'));
    }

            public function delete(TestCar18914160 $testCar18914160): void
        {
                                                if ($testCar18914160->testCar21413589959s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar18914160->delete();
        }
    }
