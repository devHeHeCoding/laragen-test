<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1939228506;

use App\Models\TestCar1939228506;
                use App\Models\TestCar21207075299;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1939228506 $testCar1939228506;

                                            
    public function mount(TestCar1939228506 $testCar1939228506)
    {
        $this->testCar1939228506 = $testCar1939228506;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1939228506->save();

        return redirect()->route('laragen.admin.test_car1939228506s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1939228506.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1939228506.jevon_windler_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
