<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1305333820;

use App\Models\TestCar1305333820;
                    use App\Models\TestCar21031309077;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1305333820 $testCar1305333820;

                                            
    public function mount(TestCar1305333820 $testCar1305333820)
    {
        $this->testCar1305333820 = $testCar1305333820;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1305333820.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1305333820->save();

        return redirect()->route('laragen.admin.test_car1305333820s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1305333820.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1305333820.miss_zelda_maggio_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
