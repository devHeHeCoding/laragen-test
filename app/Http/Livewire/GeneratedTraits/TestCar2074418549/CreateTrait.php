<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2074418549;

use App\Models\TestCar2074418549;
                    use App\Models\TestCar22125707506;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2074418549 $testCar2074418549;

                                            
    public function mount(TestCar2074418549 $testCar2074418549)
    {
        $this->testCar2074418549 = $testCar2074418549;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car2074418549.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2074418549->save();

        return redirect()->route('laragen.admin.test_car2074418549s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2074418549.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar2074418549.dr._stewart_schneider_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
