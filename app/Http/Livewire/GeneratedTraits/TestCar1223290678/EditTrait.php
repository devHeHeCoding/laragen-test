<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1223290678;

use App\Models\TestCar1223290678;
                use App\Models\TestCar2441864903;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1223290678 $testCar1223290678;

    public function mount(TestCar1223290678 $testCar1223290678)
    {
        $this->testCar1223290678 = $testCar1223290678;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1223290678->save();

        return redirect()->route('admin.testCar1223290678.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1223290678.test' => [
                                                                                                                ],
                                                'testCar1223290678.mr._stanford_zieme_sr._id' => [
                                                                                                                ],
                    ];
    }
}
