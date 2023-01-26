<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1840422296;

use App\Models\TestCar1840422296;
                use App\Models\TestCar2293294411;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1840422296 $testCar1840422296;

                                            
    public function mount(TestCar1840422296 $testCar1840422296)
    {
        $this->testCar1840422296 = $testCar1840422296;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1840422296->save();

        return redirect()->route('laragen.admin.test_car1840422296s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1840422296.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2293294411s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
