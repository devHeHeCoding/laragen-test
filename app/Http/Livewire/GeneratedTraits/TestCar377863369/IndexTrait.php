<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar377863369;

use App\Models\TestCar377863369;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar377863369 $testCar377863369;

    public function render()
    {
        $items = TestCar377863369::paginate($this->perPage);

        return view('livewire.generated.test-car377863369.index', compact('items'));
    }

            public function delete(TestCar377863369 $testCar377863369): void
        {
                                                if ($testCar377863369->testCar2423767110s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar377863369->delete();
        }
    }
