<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1382396428;

use App\Models\TestCar1382396428;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1382396428 $testCar1382396428;

    public function render()
    {
        $items = TestCar1382396428::paginate($this->perPage);

        return view('livewire.generated.test-car1382396428.index', compact('items'));
    }

            public function delete(TestCar1382396428 $testCar1382396428): void
        {
                                                if ($testCar1382396428->testCar21886829772s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1382396428->delete();
        }
    }
