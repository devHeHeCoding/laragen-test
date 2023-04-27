<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar341407257;
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
        return TestCar341407257::paginate($this->perPage);
    }

            public function delete(TestCar341407257 $testCar341407257): null|Redirector|RedirectResponse
        {
                                                if ($testCar341407257->testCar2753406902s()->count() > 0) {
                        $this->emit('deleteNotAllowed',
                            ((new \ReflectionClass(testCar341407257->testCar2753406902s()))->getShortName()
                            . ' testCar2753406902s, count: '
                            . $testCar341407257->testCar2753406902s()->count()
                            )
                        );
                        return null;
                    }
                            
            $testCar341407257->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.route.prefix.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
