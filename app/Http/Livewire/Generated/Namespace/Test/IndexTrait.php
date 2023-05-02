<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1711891965;
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
        return TestCar1711891965::paginate($this->perPage);
    }

            public function delete(TestCar1711891965 $testCar1711891965): null|Redirector|RedirectResponse
        {
                                                if ($testCar1711891965->testCar21743563790s()->count() > 0) {
                        $this->emit('deleteNotAllowed',
                            'TestCar1711891965 cannot be deleted.
                            Has testCar21743563790s: ('. $testCar1711891965->testCar21743563790s()->count() .')'
                        );

                        return null;
                    }
                            
            $testCar1711891965->delete();

        $items = $this->getQuery();

        if (empty($items->items())) {
            $lastPage = $items->lastPage();
            return redirect()->route('laragen.admin.route.prefix.index', ['page' => $lastPage]);
        }

        return null;
        }
    }
