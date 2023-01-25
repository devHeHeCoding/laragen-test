<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar54600968;

use App\Models\TestCar54600968;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar54600968 $testCar54600968;

    public function render()
    {
        $items = TestCar54600968::paginate($this->perPage);

        return view('livewire.test-car54600968.index', compact('items'));
    }

            public function delete(TestCar54600968 $testCar54600968): void
        {
                                                if ($testCar54600968->testCar21033436741s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar54600968->delete();
        }
    }
