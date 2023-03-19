<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar150542530;

use App\Models\TestCar150542530;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar150542530 $testCar150542530;

    public function render()
    {
        $items = TestCar150542530::paginate($this->perPage);

        return view('livewire.generated.test-car150542530.index', compact('items'));
    }

            public function delete(TestCar150542530 $testCar150542530): void
        {
                                                if ($testCar150542530->testCar2193928698s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar150542530->delete();
        }
    }
