<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1570150971;

use App\Models\TestCar1570150971;
                    use App\Models\TestCar21245141947;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1570150971 $testCar1570150971;

                                            
    public function mount(TestCar1570150971 $testCar1570150971)
    {
        $this->testCar1570150971 = $testCar1570150971;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1570150971->save();

        return redirect()->route('laragen.admin.test_car1570150971s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1570150971.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1570150971.leif_denesik_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
