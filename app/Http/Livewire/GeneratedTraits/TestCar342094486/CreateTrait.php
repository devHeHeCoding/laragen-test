<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar342094486;

use App\Models\TestCar342094486;
                    use App\Models\TestCar2284973861;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar342094486 $testCar342094486;

                                            
    public function mount(TestCar342094486 $testCar342094486)
    {
        $this->testCar342094486 = $testCar342094486;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car342094486.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar342094486->save();

        return redirect()->route('laragen.admin.test_car342094486s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar342094486.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar342094486.mandy_osinski_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
