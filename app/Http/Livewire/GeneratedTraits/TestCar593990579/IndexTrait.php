<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar593990579;

use App\Models\TestCar593990579;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar593990579 $testCar593990579;

    public function render()
    {
        $items = TestCar593990579::paginate($this->perPage);

        return view('livewire.generated.test-car593990579.index', compact('items'));
    }

            public function delete(TestCar593990579 $testCar593990579): void
        {
                                                if ($testCar593990579->testCar2713417085s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar593990579->delete();
        }
    }
