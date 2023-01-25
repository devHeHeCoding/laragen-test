<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar458930252;

use App\Models\TestCar458930252;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar458930252 $testCar458930252;

    public function render()
    {
        $items = TestCar458930252::paginate($this->perPage);

        return view('livewire.test-car458930252.index', compact('items'));
    }

            public function delete(TestCar458930252 $testCar458930252): void
        {
                                                if ($testCar458930252->testCar2143583493s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar458930252->delete();
        }
    }
