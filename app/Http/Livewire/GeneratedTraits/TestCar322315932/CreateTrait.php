<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar322315932;

use App\Models\TestCar322315932;
                use App\Models\TestCar2946792482;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar322315932 $testCar322315932;

                                    public Collection $testCar2946792482s;
            
    public function mount(TestCar322315932 $testCar322315932)
    {
        $this->testCar322315932 = $testCar322315932;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar322315932->save();

        return redirect()->route('laragentest_car322315932s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar322315932.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar322315932.sedrick_terry_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
