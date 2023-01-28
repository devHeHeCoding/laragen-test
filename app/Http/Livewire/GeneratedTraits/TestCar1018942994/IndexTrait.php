<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1018942994;

use App\Models\TestCar1018942994;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1018942994 $testCar1018942994;

    public function render()
    {
        $items = TestCar1018942994::paginate($this->perPage);

        return view('livewire.test-car1018942994.index', compact('items'));
    }

            public function delete(TestCar1018942994 $testCar1018942994): void
        {
                                                if ($testCar1018942994->testCar2506261455s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1018942994->delete();
        }
    }
