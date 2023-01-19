<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1758349941;

use App\Models\TestCar1758349941;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1758349941 $testCar1758349941;

    public function render()
    {
        $items = TestCar1758349941::paginate($this->perPage);

        return view('livewire.test-car1758349941.index', compact('items'));
    }

            public function delete(TestCar1758349941 $testCar1758349941): void
        {
                                                if ($testCar1758349941->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1758349941->delete();
        }
    }
