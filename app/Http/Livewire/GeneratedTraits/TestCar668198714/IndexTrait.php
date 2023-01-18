<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar668198714;

use App\Models\TestCar668198714;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar668198714 $testCar668198714;

    public function render()
    {
        $items = TestCar668198714::paginate($this->perPage);

        return view('livewire.test-car668198714.index', compact('items'));
    }

            public function delete(TestCar668198714 $testCar668198714): void
        {
                                                if ($testCar668198714->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar668198714->delete();
        }
    }
