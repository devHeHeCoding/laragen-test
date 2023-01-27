<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1754839414;

use App\Models\TestCar1754839414;
                use App\Models\TestCar22132655840;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1754839414 $testCar1754839414;

                                            
    public function mount(TestCar1754839414 $testCar1754839414)
    {
        $this->testCar1754839414 = $testCar1754839414;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1754839414->save();

        return redirect()->route('laragen.admin.test_car1754839414s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1754839414.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1754839414.stanley_sipes_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
