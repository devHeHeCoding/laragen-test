<?php
    namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1518294816;
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
        return TestCar1518294816::paginate($this->perPage);
    }

            public function delete(TestCar1518294816 $testCar1518294816): null|Redirector|RedirectResponse
        {
                                                if ($testCar1518294816->hasManyRelation()->count() > 0) {
                        $this->emit('deleteNotAllowed',
                            'TestCar1518294816 cannot be deleted.
                            Has testCar21379095378s: ('. $testCar1518294816->testCar21379095378s()->count() .')'
                        );

                        return null;
                    }
                            
            $testCar1518294816->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.route.prefix.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
