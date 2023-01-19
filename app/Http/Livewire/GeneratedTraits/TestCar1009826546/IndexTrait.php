<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1009826546;

use App\Models\TestCar1009826546;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1009826546 $testCar1009826546;

    public function render()
    {
        $items = TestCar1009826546::paginate($this->perPage);

        return view('livewire.test-car1009826546.index', compact('items'));
    }

            public function delete(TestCar1009826546 $testCar1009826546): void
        {
                                                if ($testCar1009826546->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1009826546->delete();
        }
    }
