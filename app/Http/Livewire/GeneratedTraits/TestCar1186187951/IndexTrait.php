<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1186187951;

use App\Models\TestCar1186187951;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1186187951 $testCar1186187951;

    public function render()
    {
        $items = TestCar1186187951::paginate($this->perPage);

        return view('livewire.generated.test-car1186187951.index', compact('items'));
    }

            public function delete(TestCar1186187951 $testCar1186187951): void
        {
                                                if ($testCar1186187951->testCar21523637180s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1186187951->delete();
        }
    }
