<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar983603531;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait IndexTrait
{
    public int $perPage = 10;

    public TestCar983603531 $testCar983603531;

    public function render()
    {
        $items = TestCar983603531::paginate($this->perPage);

        return view('livewire.generated.namespace.test.index', compact('items'));
    }

            public function delete(TestCar983603531 $testCar983603531): void
        {
                                                if ($testCar983603531->testCar21822146399s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar983603531->delete();
        }
    }
