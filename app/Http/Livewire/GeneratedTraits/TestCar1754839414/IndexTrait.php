<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1754839414;

use App\Models\TestCar1754839414;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1754839414 $testCar1754839414;

    public function render()
    {
        $items = TestCar1754839414::paginate($this->perPage);

        return view('livewire.test-car1754839414.index', compact('items'));
    }

            public function delete(TestCar1754839414 $testCar1754839414): void
        {
                                                if ($testCar1754839414->testCar22132655840s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1754839414->delete();
        }
    }
