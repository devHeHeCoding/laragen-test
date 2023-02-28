<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1819308966;

use App\Models\TestCar1819308966;
                    use App\Models\TestCar21256155364;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1819308966 $testCar1819308966;

                                            
    public function mount(TestCar1819308966 $testCar1819308966)
    {
        $this->testCar1819308966 = $testCar1819308966;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1819308966.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1819308966->save();

        return redirect()->route('laragen.admin.test_car1819308966s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1819308966.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1819308966.mrs._margot_kub_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
