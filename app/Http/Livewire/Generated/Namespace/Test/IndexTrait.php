<?php
    namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar694414341;
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
        return TestCar694414341::paginate($this->perPage);
    }

            public function delete(TestCar694414341 $testCar694414341): null|Redirector|RedirectResponse
        {
                                                if ($testCar694414341->hasManyRelation()->count() > 0) {
                        $this->emit('deleteNotAllowed',
                            'TestCar694414341 cannot be deleted.
                            Has testCar255801281s: ('. $testCar694414341->testCar255801281s()->count() .')'
                        );

                        return null;
                    }
                            
            $testCar694414341->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.route.prefix.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
