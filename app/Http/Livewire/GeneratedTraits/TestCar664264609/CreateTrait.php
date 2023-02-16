<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar664264609;

use App\Models\TestCar664264609;
                    use App\Models\TestCar231263316;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar664264609 $testCar664264609;

                                            
    public function mount(TestCar664264609 $testCar664264609)
    {
        $this->testCar664264609 = $testCar664264609;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car664264609.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar664264609->save();

        return redirect()->route('laragen.admin.test_car664264609s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar664264609.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar664264609.aglae_reichel_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
