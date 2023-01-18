<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1259655170;

use App\Models\TestCar1259655170;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1259655170 $testCar1259655170;

    public function render()
    {
        $items = TestCar1259655170::paginate($this->perPage);

        return view('livewire.test-car1259655170.index', compact('items'));
    }

            public function delete(TestCar1259655170 $testCar1259655170): void
        {
                                                if ($testCar1259655170->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1259655170->delete();
        }
    }
