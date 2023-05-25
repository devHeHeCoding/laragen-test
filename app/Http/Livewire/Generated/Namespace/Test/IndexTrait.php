<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar252640701;
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
        return TestCar252640701::paginate($this->perPage);
    }

            public function delete(TestCar252640701 $testCar252640701): null|Redirector|RedirectResponse
        {
                                                if ($testCar252640701->hasManyRelation()->count() > 0) {
                        $this->emit('deleteNotAllowed',
                            'TestCar252640701 cannot be deleted.
                            Has testCar21686980236s: ('. $testCar252640701->testCar21686980236s()->count() .')'
                        );

                        return null;
                    }
                            
            $testCar252640701->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.route.prefix.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
