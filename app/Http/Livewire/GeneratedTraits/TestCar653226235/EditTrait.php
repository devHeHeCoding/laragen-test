<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar653226235;

use App\Models\TestCar653226235;
                use App\Models\TestCar2446506137;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar653226235 $testCar653226235;

                                            
    public function mount(TestCar653226235 $testCar653226235)
    {
        $this->testCar653226235 = $testCar653226235;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar653226235->save();

        return redirect()->route('laragen.admin.test_car653226235s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar653226235.test' => [
                                                                                                                ],
                                                'testCar653226235.marques_metz_id' => [
                                                                                                                ],
                    ];
    }
}
