<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar242859405;

use App\Models\TestCar242859405;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar242859405 $testCar242859405;

    public function render()
    {
        $items = TestCar242859405::paginate($this->perPage);

        return view('livewire.generated.test-car242859405.index', compact('items'));
    }

            public function delete(TestCar242859405 $testCar242859405): void
        {
                                                if ($testCar242859405->testCar2991566806s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar242859405->delete();
        }
    }
