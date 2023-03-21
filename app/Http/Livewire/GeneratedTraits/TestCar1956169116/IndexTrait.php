<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1956169116;

use App\Models\TestCar1956169116;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1956169116 $testCar1956169116;

    public function render()
    {
        $items = TestCar1956169116::paginate($this->perPage);

        return view('livewire.generated.test-car1956169116.index', compact('items'));
    }

            public function delete(TestCar1956169116 $testCar1956169116): void
        {
                                                if ($testCar1956169116->testCar2597860687s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1956169116->delete();
        }
    }
