<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar572200391;

use App\Models\TestCar572200391;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar572200391 $testCar572200391;

    public function render()
    {
        $items = TestCar572200391::paginate($this->perPage);

        return view('livewire.generated.test-car572200391.index', compact('items'));
    }

            public function delete(TestCar572200391 $testCar572200391): void
        {
                                                if ($testCar572200391->testCar2762412385s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar572200391->delete();
        }
    }
