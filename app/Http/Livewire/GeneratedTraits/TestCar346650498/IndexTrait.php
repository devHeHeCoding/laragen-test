<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar346650498;

use App\Models\TestCar346650498;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar346650498 $testCar346650498;

    public function render()
    {
        $items = TestCar346650498::paginate($this->perPage);

        return view('livewire.test-car346650498.index', compact('items'));
    }

            public function delete(TestCar346650498 $testCar346650498): void
        {
                                                if ($testCar346650498->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar346650498->delete();
        }
    }
