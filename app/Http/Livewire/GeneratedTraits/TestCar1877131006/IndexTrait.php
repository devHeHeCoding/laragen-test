<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1877131006;

use App\Models\TestCar1877131006;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1877131006 $testCar1877131006;

    public function render()
    {
        $items = TestCar1877131006::paginate($this->perPage);

        return view('livewire.test-car1877131006.index', compact('items'));
    }

            public function delete(TestCar1877131006 $testCar1877131006): void
        {
                                                if ($testCar1877131006->testCar21226692621s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1877131006->delete();
        }
    }
