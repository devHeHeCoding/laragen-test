<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1818946289;

use App\Models\TestCar1818946289;
                    use App\Models\TestCar2849272622;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1818946289 $testCar1818946289;

                                            
    public function mount(TestCar1818946289 $testCar1818946289)
    {
        $this->testCar1818946289 = $testCar1818946289;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1818946289->save();

        return redirect()->route('laragen.admin.test_car1818946289s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1818946289.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1818946289.darryl_kuphal_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
