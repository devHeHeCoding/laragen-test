<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1714286670;

use App\Models\TestCar1714286670;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1714286670 $testCar1714286670;

    public function render()
    {
        $items = TestCar1714286670::paginate($this->perPage);

        return view('livewire.test-car1714286670.index', compact('items'));
    }

            public function delete(TestCar1714286670 $testCar1714286670): void
        {
                                                if ($testCar1714286670->testCar22104874008s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1714286670->delete();
        }
    }
