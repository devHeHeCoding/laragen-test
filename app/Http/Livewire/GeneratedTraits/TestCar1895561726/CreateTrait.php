<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1895561726;

use App\Models\TestCar1895561726;
                use App\Models\TestCar21521418617;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1895561726 $testCar1895561726;

                                            
    public function mount(TestCar1895561726 $testCar1895561726)
    {
        $this->testCar1895561726 = $testCar1895561726;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1895561726->save();

        return redirect()->route('laragen.admin.test_car1895561726s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1895561726.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1895561726.dallas_smith_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
