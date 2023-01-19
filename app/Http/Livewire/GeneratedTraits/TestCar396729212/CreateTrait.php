<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar396729212;

use App\Models\TestCar396729212;
                use App\Models\TestCar2114461457;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar396729212 $testCar396729212;

                                            
    public function mount(TestCar396729212 $testCar396729212)
    {
        $this->testCar396729212 = $testCar396729212;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar396729212->save();

        return redirect()->route('laragen.admin.test_car396729212s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar396729212.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar396729212.brenna_marvin_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
