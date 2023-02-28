<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2069207647;

use App\Models\TestCar2069207647;
                    use App\Models\TestCar2813526747;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2069207647 $testCar2069207647;

                                            
    public function mount(TestCar2069207647 $testCar2069207647)
    {
        $this->testCar2069207647 = $testCar2069207647;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car2069207647.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2069207647->save();

        return redirect()->route('laragen.admin.test_car2069207647s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2069207647.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar2069207647.otha_williamson_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
