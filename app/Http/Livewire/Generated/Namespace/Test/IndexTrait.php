<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar30271373;
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
        return TestCar30271373::paginate($this->perPage);
    }

            public function delete(TestCar30271373 $testCar30271373): null|Redirector|RedirectResponse
        {
                                                if ($testCar30271373->testCar21714993783s()->count() > 0) {
                        $this->emit('deleteNotAllowed',
                        (new \ReflectionClass($testCar30271373->testCar21714993783s)->getShortName()
                        . ' testCar21714993783s, count: '
                        . $testCar30271373->testCar21714993783s()->count()
                        );
                        return;
                    }
                            
            $testCar30271373->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.route.prefix.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
