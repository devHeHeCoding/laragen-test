<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar2000577556;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2000577556 $testCar2000577556;

    public function render()
    {
        $items = TestCar2000577556::paginate($this->perPage);

        return view('livewire.generated.namespace.test.index', compact('items'));
    }

            public function delete(TestCar2000577556 $testCar2000577556): void
        {
                                                if ($testCar2000577556->testCar242817543s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2000577556->delete();
        }
    }
