<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar396889675;

use App\Models\TestCar396889675;
                    use App\Models\TestCar22051749500;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar396889675 $testCar396889675;

                                            
    public function mount(TestCar396889675 $testCar396889675)
    {
        $this->testCar396889675 = $testCar396889675;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car396889675.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar396889675->save();

        return redirect()->route('laragen.admin.test_car396889675s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar396889675.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar396889675.ellen_ebert_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
