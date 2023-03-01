<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1164626058;

use App\Models\TestCar1164626058;
                    use App\Models\TestCar2961874058;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1164626058 $testCar1164626058;

                                            
    public function mount(TestCar1164626058 $testCar1164626058)
    {
        $this->testCar1164626058 = $testCar1164626058;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1164626058.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1164626058->save();

        return redirect()->route('laragen.admin.test_car1164626058s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1164626058.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1164626058.davon_wisoky_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
