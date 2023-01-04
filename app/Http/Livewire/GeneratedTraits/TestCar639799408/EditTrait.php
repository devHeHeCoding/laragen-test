<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar639799408;

use App\Models\TestCar639799408;
                use App\Models\TestCar21017421141;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar639799408 $testCar639799408;

    public function mount(TestCar639799408 $testCar639799408)
    {
        $this->testCar639799408 = $testCar639799408;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar639799408->save();

        return redirect()->route('admin.testCar639799408.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar639799408.test' => [
                                                                                                                ],
                                                'testCar639799408.dr._dax_parker_id' => [
                                                                                                                ],
                    ];
    }
}
