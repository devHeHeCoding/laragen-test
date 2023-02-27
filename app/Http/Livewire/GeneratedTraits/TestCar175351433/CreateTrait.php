<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar175351433;

use App\Models\TestCar175351433;
                    use App\Models\TestCar290749005;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar175351433 $testCar175351433;

                                            
    public function mount(TestCar175351433 $testCar175351433)
    {
        $this->testCar175351433 = $testCar175351433;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car175351433.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar175351433->save();

        return redirect()->route('laragen.admin.test_car175351433s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar175351433.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar175351433.major_frami_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
