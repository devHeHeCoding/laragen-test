<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar242985916;

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
        return TestCar242985916::paginate($this->perPage);
    }

            public function delete(TestCar242985916 $testCar242985916): void
        {
                                                if ($testCar242985916->testCar2151612090s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar242985916->delete();
        }
    }
