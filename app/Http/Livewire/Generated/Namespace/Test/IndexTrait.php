<?php
    namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1330947832;
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

            public bool $hideEditAction = false;

        public bool $hideShowAction = false;

        public bool $hideDeleteAction = false;
        public bool $hideDefaultActions = false;

    public function render()
    {
                    return view('livewire.generated.namespace.test.index', [
                'items' => $this->getQuery()
            ]);
            }

    protected function getQuery(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return TestCar1330947832::paginate($this->perPage);
    }

            public function delete(TestCar1330947832 $testCar1330947832): null|Redirector|RedirectResponse
        {
                                                if ($testCar1330947832->hasManyRelation()->count() > 0) {
                        $this->emit('deleteNotAllowed',
                            'TestCar1330947832 cannot be deleted.
                            Has testCar2447702152s: ('. $testCar1330947832->testCar2447702152s()->count() .')'
                        );

                        return null;
                    }
                            
            $testCar1330947832->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.route.prefix.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
