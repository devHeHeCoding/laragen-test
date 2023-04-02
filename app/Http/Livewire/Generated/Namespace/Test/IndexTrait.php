<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1308308702;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1308308702 $testCar1308308702;

    public function render()
    {
        $items = TestCar1308308702::paginate($this->perPage);

        return view('livewire.generated.namespace.test.index', compact('items'));
    }

            public function delete(TestCar1308308702 $testCar1308308702): void
        {
                                                if ($testCar1308308702->testCar21033530156s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1308308702->delete();
        }
    }
