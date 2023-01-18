<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2120145922;

use App\Models\TestCar2120145922;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2120145922 $testCar2120145922;

    public function render()
    {
        $items = TestCar2120145922::paginate($this->perPage);

        return view('livewire.test-car2120145922.index', compact('items'));
    }

            public function delete(TestCar2120145922 $testCar2120145922): void
        {
                                                if ($testCar2120145922->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar2120145922->delete();
        }
    }
