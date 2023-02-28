<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1188616842;

use App\Models\TestCar1188616842;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1188616842 $testCar1188616842;

    public function render()
    {
        $items = TestCar1188616842::paginate($this->perPage);

        return view('livewire.generated.test-car1188616842.index', compact('items'));
    }

            public function delete(TestCar1188616842 $testCar1188616842): void
        {
                                                if ($testCar1188616842->testCar21751952228s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1188616842->delete();
        }
    }
