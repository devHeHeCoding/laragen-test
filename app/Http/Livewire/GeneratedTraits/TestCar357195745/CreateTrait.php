<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar357195745;

use App\Models\TestCar357195745;
                    use App\Models\TestCar22066616671;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar357195745 $testCar357195745;

                                            
    public function mount(TestCar357195745 $testCar357195745)
    {
        $this->testCar357195745 = $testCar357195745;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car357195745.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar357195745->save();

        return redirect()->route('laragen.admin.test_car357195745s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar357195745.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar357195745.jovan_grimes_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
