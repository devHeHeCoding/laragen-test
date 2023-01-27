<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar402781284;

use App\Models\TestCar402781284;
                use App\Models\TestCar21623756155;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar402781284 $testCar402781284;

                                            
    public function mount(TestCar402781284 $testCar402781284)
    {
        $this->testCar402781284 = $testCar402781284;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar402781284->save();

        return redirect()->route('laragen.admin.test_car402781284s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar402781284.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar21623756155s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
