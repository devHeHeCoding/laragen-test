<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1704459636;

use App\Models\TestCar1704459636;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1704459636 $testCar1704459636;

    public function render()
    {
        $items = TestCar1704459636::paginate($this->perPage);

        return view('livewire.generated.test-car1704459636.index', compact('items'));
    }

            public function delete(TestCar1704459636 $testCar1704459636): void
        {
                                                if ($testCar1704459636->testCar21533687298s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1704459636->delete();
        }
    }
