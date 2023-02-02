<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1704748392;

use App\Models\TestCar1704748392;
                use App\Models\TestCar2836470273;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1704748392 $testCar1704748392;

                                            
    public function mount(TestCar1704748392 $testCar1704748392)
    {
        $this->testCar1704748392 = $testCar1704748392;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1704748392->save();

        return redirect()->route('laragen.admin.test_car1704748392s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1704748392.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1704748392.annabelle_bosco_sr._id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
