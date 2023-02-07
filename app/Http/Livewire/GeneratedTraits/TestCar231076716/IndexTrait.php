<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar231076716;

use App\Models\TestCar231076716;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar231076716 $testCar231076716;

    public function render()
    {
        $items = TestCar231076716::paginate($this->perPage);

        return view('livewire.test-car231076716.index', compact('items'));
    }

            public function delete(TestCar231076716 $testCar231076716): void
        {
                                                if ($testCar231076716->testCar21802586333s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar231076716->delete();
        }
    }
