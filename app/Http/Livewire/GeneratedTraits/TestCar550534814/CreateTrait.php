<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar550534814;

use App\Models\TestCar550534814;
                use App\Models\TestCar2302840860;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar550534814 $testCar550534814;

                                            
    public function mount(TestCar550534814 $testCar550534814)
    {
        $this->testCar550534814 = $testCar550534814;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar550534814->save();

        return redirect()->route('laragen.admin.test_car550534814s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar550534814.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar550534814.miss_ocie_bogan_i_i_i_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
