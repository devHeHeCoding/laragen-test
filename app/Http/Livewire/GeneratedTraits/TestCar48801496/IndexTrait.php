<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar48801496;

use App\Models\TestCar48801496;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar48801496 $testCar48801496;

    public function render()
    {
        $items = TestCar48801496::paginate($this->perPage);

        return view('livewire.generated.test-car48801496.index', compact('items'));
    }

            public function delete(TestCar48801496 $testCar48801496): void
        {
                                                if ($testCar48801496->testCar2381810580s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar48801496->delete();
        }
    }
