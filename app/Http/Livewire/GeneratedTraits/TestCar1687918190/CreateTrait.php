<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1687918190;

use App\Models\TestCar1687918190;
                use App\Models\TestCar21395081977;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1687918190 $testCar1687918190;

                                            
    public function mount(TestCar1687918190 $testCar1687918190)
    {
        $this->testCar1687918190 = $testCar1687918190;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1687918190->save();

        return redirect()->route('laragen.admin.test_car1687918190s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1687918190.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1687918190.dr._woodrow_johnson_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
