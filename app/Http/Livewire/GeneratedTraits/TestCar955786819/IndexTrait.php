<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar955786819;

use App\Models\TestCar955786819;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar955786819 $testCar955786819;

    public function render()
    {
        $items = TestCar955786819::paginate($this->perPage);

        return view('livewire.test-car955786819.index', compact('items'));
    }

            public function delete(TestCar955786819 $testCar955786819): void
        {
                                                if ($testCar955786819->testCar2244238395s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar955786819->delete();
        }
    }
