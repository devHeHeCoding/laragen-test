<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar29932439;

use App\Models\TestCar29932439;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar29932439 $testCar29932439;

    public function render()
    {
        $items = TestCar29932439::paginate($this->perPage);

        return view('livewire.test-car29932439.index', compact('items'));
    }

            public function delete(TestCar29932439 $testCar29932439): void
        {
                                                if ($testCar29932439->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar29932439->delete();
        }
    }
