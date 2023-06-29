<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1255711560;
use Illuminate\Http\RedirectResponse;
use Livewire\Redirector;

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
        return TestCar1255711560::paginate($this->perPage);
    }

            public function delete(TestCar1255711560 $testCar1255711560): null|Redirector|RedirectResponse
        {
                                                if ($testCar1255711560->hasManyRelation()->count() > 0) {
                        $this->emit('deleteNotAllowed',
                            'TestCar1255711560 cannot be deleted.
                            Has testCar2707193122s: ('. $testCar1255711560->testCar2707193122s()->count() .')'
                        );

                        return null;
                    }
                            
            $testCar1255711560->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.route.prefix.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
