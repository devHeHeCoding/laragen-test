<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar469150571;

use App\Models\TestCar469150571;
                    use App\Models\TestCar2539510607;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar469150571 $testCar469150571;

                                            
    public function mount(TestCar469150571 $testCar469150571)
    {
        $this->testCar469150571 = $testCar469150571;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car469150571.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar469150571->save();

        return redirect()->route('laragen.admin.test_car469150571s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar469150571.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar469150571.vince_reilly_i_i_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
