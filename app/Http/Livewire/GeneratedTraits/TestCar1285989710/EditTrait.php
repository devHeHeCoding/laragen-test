<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1285989710;

use App\Models\TestCar1285989710;
                use App\Models\TestCar229779167;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1285989710 $testCar1285989710;

                                            
    public function mount(TestCar1285989710 $testCar1285989710)
    {
        $this->testCar1285989710 = $testCar1285989710;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1285989710->save();

        return redirect()->route('laragen.admin.test_car1285989710s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1285989710.test' => [
                                                                                                                ],
                                                'testCar1285989710.kayleigh_bergstrom_id' => [
                                                                                                                ],
                    ];
    }
}
