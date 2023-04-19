<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1817101688;

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
        return TestCar1817101688::paginate($this->perPage);
    }

            public function delete(TestCar1817101688 $testCar1817101688): void
        {
                                                if ($testCar1817101688->testCar2138441704s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1817101688->delete();
        }
    }
