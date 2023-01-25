<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1727222775;

use App\Models\TestCar1727222775;
                use App\Models\TestCar21567329259;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1727222775 $testCar1727222775;

                                            
    public function mount(TestCar1727222775 $testCar1727222775)
    {
        $this->testCar1727222775 = $testCar1727222775;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1727222775->save();

        return redirect()->route('laragen.admin.test_car1727222775s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1727222775.test' => [
                                                                                                                ],
                                                'testCar1727222775.isabel_klocko_ph_d_id' => [
                                                                                                                ],
                    ];
    }
}
