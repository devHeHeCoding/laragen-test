<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar40686181;

use App\Models\TestCar40686181;
                use App\Models\TestCar2732044160;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar40686181 $testCar40686181;

                                            
    public function mount(TestCar40686181 $testCar40686181)
    {
        $this->testCar40686181 = $testCar40686181;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar40686181->save();

        return redirect()->route('laragen.admin.test_car40686181s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar40686181.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2732044160s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
