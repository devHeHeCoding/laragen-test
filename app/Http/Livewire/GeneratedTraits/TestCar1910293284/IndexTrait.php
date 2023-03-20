<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1910293284;

use App\Models\TestCar1910293284;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1910293284 $testCar1910293284;

    public function render()
    {
        $items = TestCar1910293284::paginate($this->perPage);

        return view('livewire.generated.test-car1910293284.index', compact('items'));
    }

            public function delete(TestCar1910293284 $testCar1910293284): void
        {
                                                if ($testCar1910293284->testCar21108591100s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1910293284->delete();
        }
    }
