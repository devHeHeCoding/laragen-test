<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar940083059;

use App\Models\TestCar940083059;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar940083059 $testCar940083059;

    public function render()
    {
        $items = TestCar940083059::paginate($this->perPage);

        return view('livewire.generated.test-car940083059.index', compact('items'));
    }

            public function delete(TestCar940083059 $testCar940083059): void
        {
                                                if ($testCar940083059->testCar21543731479s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar940083059->delete();
        }
    }
