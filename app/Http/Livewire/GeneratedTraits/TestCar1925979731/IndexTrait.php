<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1925979731;

use App\Models\TestCar1925979731;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1925979731 $testCar1925979731;

    public function render()
    {
        $items = TestCar1925979731::paginate($this->perPage);

        return view('livewire.test-car1925979731.index', compact('items'));
    }

            public function delete(TestCar1925979731 $testCar1925979731): void
        {
                                                if ($testCar1925979731->testCar21637257746s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1925979731->delete();
        }
    }
