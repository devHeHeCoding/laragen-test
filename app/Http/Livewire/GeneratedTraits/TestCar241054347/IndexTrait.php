<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar241054347;

use App\Models\TestCar241054347;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar241054347 $testCar241054347;

    public function render()
    {
        $items = TestCar241054347::paginate($this->perPage);

        return view('livewire.generated.test-car241054347.index', compact('items'));
    }

            public function delete(TestCar241054347 $testCar241054347): void
        {
                                                if ($testCar241054347->testCar2610455638s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar241054347->delete();
        }
    }
