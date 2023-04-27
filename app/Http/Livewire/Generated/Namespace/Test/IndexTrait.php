<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1194043141;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Index`
*/
trait IndexTrait
{
            use \Hehecoding\LaragenUiKit\Traits\WithConfirmation;
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
        return TestCar1194043141::paginate($this->perPage);
    }

            public function delete(TestCar1194043141 $testCar1194043141): void
        {
                                                if ($testCar1194043141->testCar2873425705s()->count() > 0) {
                        $this->emit('deleteNotAllowed',
                        (new \ReflectionClass($testCar1194043141->testCar2873425705s)->getShortName()
                        . ' testCar2873425705s, count: '
                        . $testCar1194043141->testCar2873425705s()->count()
                        );
                        return;
                    }
                            
            $testCar1194043141->delete();
        }
    }
