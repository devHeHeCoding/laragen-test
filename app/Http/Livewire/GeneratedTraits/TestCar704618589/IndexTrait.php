<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar704618589;

use App\Models\TestCar704618589;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar704618589 $testCar704618589;

    public function render()
    {
        $items = TestCar704618589::paginate($this->perPage);

        return view('livewire.test-car704618589.index', compact('items'));
    }

            public function delete(TestCar704618589 $testCar704618589): void
        {
                                                if ($testCar704618589->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar704618589->delete();
        }
    }
