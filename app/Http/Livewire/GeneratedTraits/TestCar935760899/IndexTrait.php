<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar935760899;

use App\Models\TestCar935760899;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar935760899 $testCar935760899;

    public function render()
    {
        $items = TestCar935760899::paginate($this->perPage);

        return view('livewire.test-car935760899.index', compact('items'));
    }

            public function delete(TestCar935760899 $testCar935760899): void
        {
                                                if ($testCar935760899->testCar22006016104s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar935760899->delete();
        }
    }
