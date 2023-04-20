<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar752193676;

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
        return TestCar752193676::paginate($this->perPage);
    }

            public function delete(TestCar752193676 $testCar752193676): void
        {
                                                if ($testCar752193676->testCar2146382241s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar752193676->delete();
        }
    }
