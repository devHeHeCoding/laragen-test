<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1215803700;

use App\Models\TestCar1215803700;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1215803700 $testCar1215803700;

    public function render()
    {
        $items = TestCar1215803700::paginate($this->perPage);

        return view('livewire.generated.test-car1215803700.index', compact('items'));
    }

            public function delete(TestCar1215803700 $testCar1215803700): void
        {
                                                if ($testCar1215803700->testCar21509735223s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1215803700->delete();
        }
    }
