<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar949074142;

use App\Models\TestCar949074142;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar949074142 $testCar949074142;

    public function render()
    {
        $items = TestCar949074142::paginate($this->perPage);

        return view('livewire.test-car949074142.index', compact('items'));
    }

            public function delete(TestCar949074142 $testCar949074142): void
        {
                                                if ($testCar949074142->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar949074142->delete();
        }
    }
