<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1183076443;

use App\Models\TestCar1183076443;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1183076443 $testCar1183076443;

    public function render()
    {
        $items = TestCar1183076443::paginate($this->perPage);

        return view('livewire.generated.test-car1183076443.index', compact('items'));
    }

            public function delete(TestCar1183076443 $testCar1183076443): void
        {
                                                if ($testCar1183076443->testCar2867026988s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1183076443->delete();
        }
    }
