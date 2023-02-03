<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar573271013;

use App\Models\TestCar573271013;
                use App\Models\TestCar2782255245;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar573271013 $testCar573271013;

                                            
    public function mount(TestCar573271013 $testCar573271013)
    {
        $this->testCar573271013 = $testCar573271013;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar573271013->save();

        return redirect()->route('laragen.admin.test_car573271013s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar573271013.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar573271013.prof._maxine_ryan_jr._id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
