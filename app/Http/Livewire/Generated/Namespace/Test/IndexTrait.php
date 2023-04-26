<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar380331351;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Index`
*/
trait IndexTrait
{
            use Hehecoding\LaragenUiKit\Traits\WithConfirmation;
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
        return TestCar380331351::paginate($this->perPage);
    }

            public function delete(TestCar380331351 $testCar380331351): void
        {
                                                if ($testCar380331351->testCar21511174906s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar380331351->delete();
        }
    }
