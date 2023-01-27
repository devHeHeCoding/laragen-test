<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar682352345;

use App\Models\TestCar682352345;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar682352345 $testCar682352345;

    public function render()
    {
        $items = TestCar682352345::paginate($this->perPage);

        return view('livewire.test-car682352345.index', compact('items'));
    }

            public function delete(TestCar682352345 $testCar682352345): void
        {
                                                if ($testCar682352345->testCar21080636978s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar682352345->delete();
        }
    }
