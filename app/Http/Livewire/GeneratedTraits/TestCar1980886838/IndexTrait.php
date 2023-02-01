<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1980886838;

use App\Models\TestCar1980886838;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1980886838 $testCar1980886838;

    public function render()
    {
        $items = TestCar1980886838::paginate($this->perPage);

        return view('livewire.test-car1980886838.index', compact('items'));
    }

            public function delete(TestCar1980886838 $testCar1980886838): void
        {
                                                if ($testCar1980886838->testCar2148648385s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1980886838->delete();
        }
    }
