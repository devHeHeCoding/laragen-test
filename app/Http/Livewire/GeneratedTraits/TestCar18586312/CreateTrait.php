<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar18586312;

use App\Models\TestCar18586312;
            use App\Models\TestCar21531410312;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar18586312 $testCar18586312;

                                            
    public function mount(TestCar18586312 $testCar18586312)
    {
        $this->testCar18586312 = $testCar18586312;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car18586312.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar18586312->save();

        return redirect()->route('laragen.admin.test_car18586312s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar18586312.test' => [
                                                                                ],
                                                                    'testCar18586312.chris_monahan_id' => [
                                                                                ],
                    ];
    }
}
