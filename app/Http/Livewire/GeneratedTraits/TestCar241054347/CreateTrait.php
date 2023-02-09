<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar241054347;

use App\Models\TestCar241054347;
                    use App\Models\TestCar2610455638;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar241054347 $testCar241054347;

                                            
    public function mount(TestCar241054347 $testCar241054347)
    {
        $this->testCar241054347 = $testCar241054347;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car241054347.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar241054347->save();

        return redirect()->route('laragen.admin.test_car241054347s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar241054347.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar241054347.bennie_feeney_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
