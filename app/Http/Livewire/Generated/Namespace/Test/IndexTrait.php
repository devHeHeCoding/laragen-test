<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1739407355;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1739407355 $testCar1739407355;

    public function render()
    {
        $items = TestCar1739407355::paginate($this->perPage);

        return view('livewire.generated.namespace.test.index', compact('items'));
    }

            public function delete(TestCar1739407355 $testCar1739407355): void
        {
                                                if ($testCar1739407355->testCar21793675958s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1739407355->delete();
        }
    }
