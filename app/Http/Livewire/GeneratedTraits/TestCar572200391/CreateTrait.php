<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar572200391;

use App\Models\TestCar572200391;
                    use App\Models\TestCar2762412385;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar572200391 $testCar572200391;

                                            
    public function mount(TestCar572200391 $testCar572200391)
    {
        $this->testCar572200391 = $testCar572200391;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car572200391.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar572200391->save();

        return redirect()->route('laragen.admin.test_car572200391s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar572200391.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar572200391.filiberto_pfeffer_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
