<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1201803055;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1201803055 $testCar1201803055;

    public function render()
    {
        $items = TestCar1201803055::paginate($this->perPage);

        return view('livewire.generated.namespace.test.index', compact('items'));
    }

            public function delete(TestCar1201803055 $testCar1201803055): void
        {
                                                if ($testCar1201803055->testCar21229406542s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1201803055->delete();
        }
    }
