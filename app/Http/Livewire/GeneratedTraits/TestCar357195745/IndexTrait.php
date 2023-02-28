<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar357195745;

use App\Models\TestCar357195745;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar357195745 $testCar357195745;

    public function render()
    {
        $items = TestCar357195745::paginate($this->perPage);

        return view('livewire.generated.test-car357195745.index', compact('items'));
    }

            public function delete(TestCar357195745 $testCar357195745): void
        {
                                                if ($testCar357195745->testCar22066616671s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar357195745->delete();
        }
    }
