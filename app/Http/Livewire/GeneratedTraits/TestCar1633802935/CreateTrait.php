<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1633802935;

use App\Models\TestCar1633802935;
                use App\Models\TestCar21700242801;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1633802935 $testCar1633802935;

                                            
    public function mount(TestCar1633802935 $testCar1633802935)
    {
        $this->testCar1633802935 = $testCar1633802935;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1633802935->save();

        return redirect()->route('laragen.admin.test_car1633802935s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1633802935.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar21700242801s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
