<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar30717885;

use App\Models\TestCar30717885;
                use App\Models\TestCar2402215259;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar30717885 $testCar30717885;

                                            
    public function mount(TestCar30717885 $testCar30717885)
    {
        $this->testCar30717885 = $testCar30717885;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar30717885->save();

        return redirect()->route('laragen.admin.test_car30717885s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar30717885.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2402215259s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
