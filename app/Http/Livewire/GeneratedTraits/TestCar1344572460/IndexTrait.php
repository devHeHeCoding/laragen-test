<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1344572460;

use App\Models\TestCar1344572460;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1344572460 $testCar1344572460;

    public function render()
    {
        $items = TestCar1344572460::paginate($this->perPage);

        return view('livewire.test-car1344572460.index', compact('items'));
    }

            public function delete(TestCar1344572460 $testCar1344572460): void
        {
                                                if ($testCar1344572460->testCar2543125571s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1344572460->delete();
        }
    }
