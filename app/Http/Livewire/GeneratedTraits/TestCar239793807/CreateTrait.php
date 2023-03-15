<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar239793807;

use App\Models\TestCar239793807;
                    use App\Models\TestCar21715222222;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar239793807 $testCar239793807;

                                            
    public function mount(TestCar239793807 $testCar239793807)
    {
        $this->testCar239793807 = $testCar239793807;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car239793807.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar239793807->save();

        return redirect()->route('laragen.admin.test_car239793807s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar239793807.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar239793807.duncan_hermann_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
