<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar760085987;

use App\Models\TestCar760085987;
                    use App\Models\TestCar21524459065;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar760085987 $testCar760085987;

                                            
    public function mount(TestCar760085987 $testCar760085987)
    {
        $this->testCar760085987 = $testCar760085987;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car760085987.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar760085987->save();

        return redirect()->route('laragen.admin.test_car760085987s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar760085987.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar760085987.katlyn_zulauf_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
