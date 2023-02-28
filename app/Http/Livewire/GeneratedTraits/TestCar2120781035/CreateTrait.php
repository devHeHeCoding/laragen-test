<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2120781035;

use App\Models\TestCar2120781035;
                    use App\Models\TestCar2405675999;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2120781035 $testCar2120781035;

                                            
    public function mount(TestCar2120781035 $testCar2120781035)
    {
        $this->testCar2120781035 = $testCar2120781035;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car2120781035.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2120781035->save();

        return redirect()->route('laragen.admin.test_car2120781035s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2120781035.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar2120781035.elisa_legros_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
