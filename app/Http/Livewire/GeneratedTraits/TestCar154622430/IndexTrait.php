<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar154622430;

use App\Models\TestCar154622430;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar154622430 $testCar154622430;

    public function render()
    {
        $items = TestCar154622430::paginate($this->perPage);

        return view('livewire.generated.test-car154622430.index', compact('items'));
    }

            public function delete(TestCar154622430 $testCar154622430): void
        {
                                                if ($testCar154622430->testCar21326650999s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar154622430->delete();
        }
    }
