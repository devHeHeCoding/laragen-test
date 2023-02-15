<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar171292457;

use App\Models\TestCar171292457;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar171292457 $testCar171292457;

    public function render()
    {
        $items = TestCar171292457::paginate($this->perPage);

        return view('livewire.generated.test-car171292457.index', compact('items'));
    }

            public function delete(TestCar171292457 $testCar171292457): void
        {
                                                if ($testCar171292457->testCar21058887581s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar171292457->delete();
        }
    }
