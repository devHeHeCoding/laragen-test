<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1687918190;

use App\Models\TestCar1687918190;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1687918190 $testCar1687918190;

    public function render()
    {
        $items = TestCar1687918190::paginate($this->perPage);

        return view('livewire.test-car1687918190.index', compact('items'));
    }

            public function delete(TestCar1687918190 $testCar1687918190): void
        {
                                                if ($testCar1687918190->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1687918190->delete();
        }
    }
