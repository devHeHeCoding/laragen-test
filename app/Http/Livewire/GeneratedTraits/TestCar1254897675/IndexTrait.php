<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1254897675;

use App\Models\TestCar1254897675;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1254897675 $testCar1254897675;

    public function render()
    {
        $items = TestCar1254897675::paginate($this->perPage);

        return view('livewire.test-car1254897675.index', compact('items'));
    }

            public function delete(TestCar1254897675 $testCar1254897675): void
        {
                                                if ($testCar1254897675->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1254897675->delete();
        }
    }
