<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1268868104;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1268868104 $testCar1268868104;

    public function render()
    {
        $items = TestCar1268868104::paginate($this->perPage);

        return view('livewire.generated.namespace.test.index', compact('items'));
    }

            public function delete(TestCar1268868104 $testCar1268868104): void
        {
                                                if ($testCar1268868104->testCar21624293723s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1268868104->delete();
        }
    }
