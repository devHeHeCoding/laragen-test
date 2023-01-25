<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1868919811;

use App\Models\TestCar1868919811;
                use App\Models\TestCar21318176695;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1868919811 $testCar1868919811;

                                            
    public function mount(TestCar1868919811 $testCar1868919811)
    {
        $this->testCar1868919811 = $testCar1868919811;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1868919811->save();

        return redirect()->route('laragen.admin.test_car1868919811s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1868919811.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar21318176695s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
