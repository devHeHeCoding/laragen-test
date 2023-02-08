<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1780273142;

use App\Models\TestCar1780273142;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1780273142 $testCar1780273142;

    public function render()
    {
        $items = TestCar1780273142::paginate($this->perPage);

        return view('livewire.generated.test-car1780273142.index', compact('items'));
    }

            public function delete(TestCar1780273142 $testCar1780273142): void
        {
                                                if ($testCar1780273142->testCar22134990307s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1780273142->delete();
        }
    }
