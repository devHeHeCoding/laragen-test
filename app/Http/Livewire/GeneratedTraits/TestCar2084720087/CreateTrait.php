<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2084720087;

use App\Models\TestCar2084720087;
                    use App\Models\TestCar2422308149;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2084720087 $testCar2084720087;

                                            
    public function mount(TestCar2084720087 $testCar2084720087)
    {
        $this->testCar2084720087 = $testCar2084720087;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car2084720087.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2084720087->save();

        return redirect()->route('laragen.admin.test_car2084720087s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2084720087.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar2084720087.jarrett_nienow_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
