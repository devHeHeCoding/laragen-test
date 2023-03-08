<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar18586312;

use App\Models\TestCar18586312;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar18586312 $testCar18586312;

    public function render()
    {
        $items = TestCar18586312::paginate($this->perPage);

        return view('livewire.generated.test-car18586312.index', compact('items'));
    }

            public function delete(TestCar18586312 $testCar18586312): void
        {
                                                if ($testCar18586312->testCar21531410312s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar18586312->delete();
        }
    }
