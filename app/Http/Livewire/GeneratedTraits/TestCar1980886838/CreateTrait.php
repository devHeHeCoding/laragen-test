<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1980886838;

use App\Models\TestCar1980886838;
                use App\Models\TestCar2148648385;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1980886838 $testCar1980886838;

                                            
    public function mount(TestCar1980886838 $testCar1980886838)
    {
        $this->testCar1980886838 = $testCar1980886838;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1980886838->save();

        return redirect()->route('laragen.admin.test_car1980886838s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1980886838.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1980886838.prof._antone_denesik_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
