<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar432441379;

use App\Models\TestCar432441379;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar432441379 $testCar432441379;

    public function render()
    {
        $items = TestCar432441379::paginate($this->perPage);

        return view('livewire.test-car432441379.index', compact('items'));
    }

            public function delete(TestCar432441379 $testCar432441379): void
        {
                                                if ($testCar432441379->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar432441379->delete();
        }
    }
