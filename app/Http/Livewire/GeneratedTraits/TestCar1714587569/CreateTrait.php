<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1714587569;

use App\Models\TestCar1714587569;
                    use App\Models\TestCar21682186286;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1714587569 $testCar1714587569;

                                            
    public function mount(TestCar1714587569 $testCar1714587569)
    {
        $this->testCar1714587569 = $testCar1714587569;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1714587569->save();

        return redirect()->route('laragen.admin.test_car1714587569s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1714587569.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1714587569.isaias_douglas_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
