<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar85453210;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Index`
*/
trait IndexTrait
{
    public int $perPage = 10;

    public bool $hideDefaultActions = false;

    public function render()
    {
        return view('livewire.generated.namespace.test.index', [
            'items' => $this->getQuery()
        ]);
    }

    protected function getQuery(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return TestCar85453210::paginate($this->perPage);
    }

            public function delete(TestCar85453210 $testCar85453210): void
        {
                                                if ($testCar85453210->testCar2975413479s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar85453210->delete();
        }
    }
