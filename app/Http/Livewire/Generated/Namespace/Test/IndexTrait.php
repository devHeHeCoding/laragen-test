<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1441310521;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1441310521 $testCar1441310521;

    public function render()
    {
        $items = TestCar1441310521::paginate($this->perPage);

        return view('livewire.generated.namespace.test.index', compact('items'));
    }

            public function delete(TestCar1441310521 $testCar1441310521): void
        {
                                                if ($testCar1441310521->testCar2631613080s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1441310521->delete();
        }
    }
