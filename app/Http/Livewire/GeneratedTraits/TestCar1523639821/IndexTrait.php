<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1523639821;

use App\Models\TestCar1523639821;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1523639821 $testCar1523639821;

    public function render()
    {
        $items = TestCar1523639821::paginate($this->perPage);

        return view('livewire.test-car1523639821.index', compact('items'));
    }

            public function delete(TestCar1523639821 $testCar1523639821): void
        {
                                                if ($testCar1523639821->testCar21755907065s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1523639821->delete();
        }
    }
