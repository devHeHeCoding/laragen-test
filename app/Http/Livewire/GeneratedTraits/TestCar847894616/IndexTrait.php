<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar847894616;

use App\Models\TestCar847894616;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar847894616 $testCar847894616;

    public function render()
    {
        $items = TestCar847894616::paginate($this->perPage);

        return view('livewire.generated.test-car847894616.index', compact('items'));
    }

            public function delete(TestCar847894616 $testCar847894616): void
        {
                                                if ($testCar847894616->testCar2980967480s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar847894616->delete();
        }
    }
