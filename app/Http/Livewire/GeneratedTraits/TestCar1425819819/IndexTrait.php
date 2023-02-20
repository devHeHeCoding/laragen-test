<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1425819819;

use App\Models\TestCar1425819819;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1425819819 $testCar1425819819;

    public function render()
    {
        $items = TestCar1425819819::paginate($this->perPage);

        return view('livewire.generated.test-car1425819819.index', compact('items'));
    }

            public function delete(TestCar1425819819 $testCar1425819819): void
        {
                                                if ($testCar1425819819->testCar278691889s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1425819819->delete();
        }
    }
