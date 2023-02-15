<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar251616098;

use App\Models\TestCar251616098;
                    use App\Models\TestCar2940058236;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar251616098 $testCar251616098;

                                            
    public function mount(TestCar251616098 $testCar251616098)
    {
        $this->testCar251616098 = $testCar251616098;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car251616098.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar251616098->save();

        return redirect()->route('laragen.admin.test_car251616098s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar251616098.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar251616098.ashley_west_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
