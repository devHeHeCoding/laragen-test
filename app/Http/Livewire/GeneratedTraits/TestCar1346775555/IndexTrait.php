<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1346775555;

use App\Models\TestCar1346775555;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1346775555 $testCar1346775555;

    public function render()
    {
        $items = TestCar1346775555::paginate($this->perPage);

        return view('livewire.test-car1346775555.index', compact('items'));
    }

            public function delete(TestCar1346775555 $testCar1346775555): void
        {
                                                if ($testCar1346775555->testCar21229529675s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1346775555->delete();
        }
    }
