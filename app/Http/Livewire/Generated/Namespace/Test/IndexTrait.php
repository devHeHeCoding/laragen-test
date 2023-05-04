<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1801297115;
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
        return TestCar1801297115::paginate($this->perPage);
    }

            public function delete(TestCar1801297115 $testCar1801297115): null|Redirector|RedirectResponse
        {
                                                if ($testCar1801297115->testCar21303658342s()->count() > 0) {
                        $this->emit('deleteNotAllowed',
                            'TestCar1801297115 cannot be deleted.
                            Has testCar21303658342s: ('. $testCar1801297115->testCar21303658342s()->count() .')'
                        );

                        return null;
                    }
                            
            $testCar1801297115->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.route.prefix.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
