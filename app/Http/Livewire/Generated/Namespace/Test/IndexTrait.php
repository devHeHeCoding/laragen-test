<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar100524395;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait IndexTrait
{
    public int $perPage = 10;

    public TestCar100524395 $testCar100524395;

    public function render()
    {
        $items = TestCar100524395::paginate($this->perPage);

        return view('livewire.generated.namespace.test.index', compact('items'));
    }

            public function delete(TestCar100524395 $testCar100524395): void
        {
                                                if ($testCar100524395->testCar2611800888s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar100524395->delete();
        }
    }
