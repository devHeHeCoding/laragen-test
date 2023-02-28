<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1819308966;

use App\Models\TestCar1819308966;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1819308966 $testCar1819308966;

    public function render()
    {
        $items = TestCar1819308966::paginate($this->perPage);

        return view('livewire.generated.test-car1819308966.index', compact('items'));
    }

            public function delete(TestCar1819308966 $testCar1819308966): void
        {
                                                if ($testCar1819308966->testCar21256155364s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1819308966->delete();
        }
    }
