<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1426086887;

use App\Models\TestCar1426086887;
                use App\Models\TestCar2250405027;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1426086887 $testCar1426086887;

                                            
    public function mount(TestCar1426086887 $testCar1426086887)
    {
        $this->testCar1426086887 = $testCar1426086887;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1426086887->save();

        return redirect()->route('laragen.admin.test_car1426086887s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1426086887.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1426086887.dr._luciano_pollich_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
