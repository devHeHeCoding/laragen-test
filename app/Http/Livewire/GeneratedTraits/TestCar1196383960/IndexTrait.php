<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1196383960;

use App\Models\TestCar1196383960;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1196383960 $testCar1196383960;

    public function render()
    {
        $items = TestCar1196383960::paginate($this->perPage);

        return view('livewire.generated.test-car1196383960.index', compact('items'));
    }

            public function delete(TestCar1196383960 $testCar1196383960): void
        {
                                                if ($testCar1196383960->testCar21347851970s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1196383960->delete();
        }
    }
