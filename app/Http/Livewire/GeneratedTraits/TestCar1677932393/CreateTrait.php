<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1677932393;

use App\Models\TestCar1677932393;
                use App\Models\TestCar21267361011;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1677932393 $testCar1677932393;

                                            
    public function mount(TestCar1677932393 $testCar1677932393)
    {
        $this->testCar1677932393 = $testCar1677932393;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1677932393->save();

        return redirect()->route('laragen.admin.test_car1677932393s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1677932393.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1677932393.bettie_cassin_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
