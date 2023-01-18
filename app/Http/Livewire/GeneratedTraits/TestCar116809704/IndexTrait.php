<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar116809704;

use App\Models\TestCar116809704;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar116809704 $testCar116809704;

    public function render()
    {
        $items = TestCar116809704::paginate($this->perPage);

        return view('livewire.test-car116809704.index', compact('items'));
    }

            public function delete(TestCar116809704 $testCar116809704): void
        {
                                                if ($testCar116809704->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar116809704->delete();
        }
    }
