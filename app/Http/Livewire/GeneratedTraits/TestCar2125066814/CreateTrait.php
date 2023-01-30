<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2125066814;

use App\Models\TestCar2125066814;
                use App\Models\TestCar21167111726;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2125066814 $testCar2125066814;

                                            
    public function mount(TestCar2125066814 $testCar2125066814)
    {
        $this->testCar2125066814 = $testCar2125066814;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar2125066814->save();

        return redirect()->route('laragen.admin.test_car2125066814s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2125066814.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar2125066814.dedric_heller_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
