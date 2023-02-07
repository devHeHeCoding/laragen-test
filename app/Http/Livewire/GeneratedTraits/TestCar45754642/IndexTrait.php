<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar45754642;

use App\Models\TestCar45754642;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar45754642 $testCar45754642;

    public function render()
    {
        $items = TestCar45754642::paginate($this->perPage);

        return view('livewire.generated.test-car45754642.index', compact('items'));
    }

            public function delete(TestCar45754642 $testCar45754642): void
        {
                                                if ($testCar45754642->testCar2696254184s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar45754642->delete();
        }
    }
