<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar309064133;

use App\Models\TestCar309064133;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar309064133 $testCar309064133;

    public function render()
    {
        $items = TestCar309064133::paginate($this->perPage);

        return view('livewire.generated.test-car309064133.index', compact('items'));
    }

            public function delete(TestCar309064133 $testCar309064133): void
        {
                                                if ($testCar309064133->testCar2148030037s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar309064133->delete();
        }
    }
