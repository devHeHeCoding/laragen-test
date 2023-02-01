<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1857120497;

use App\Models\TestCar1857120497;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1857120497 $testCar1857120497;

    public function render()
    {
        $items = TestCar1857120497::paginate($this->perPage);

        return view('livewire.test-car1857120497.index', compact('items'));
    }

            public function delete(TestCar1857120497 $testCar1857120497): void
        {
                                                if ($testCar1857120497->testCar2521726156s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1857120497->delete();
        }
    }
