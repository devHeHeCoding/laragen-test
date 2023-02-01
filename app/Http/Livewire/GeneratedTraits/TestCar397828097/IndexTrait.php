<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar397828097;

use App\Models\TestCar397828097;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar397828097 $testCar397828097;

    public function render()
    {
        $items = TestCar397828097::paginate($this->perPage);

        return view('livewire.test-car397828097.index', compact('items'));
    }

            public function delete(TestCar397828097 $testCar397828097): void
        {
                                                if ($testCar397828097->testCar21386383534s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar397828097->delete();
        }
    }
