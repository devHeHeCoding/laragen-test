<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1388237257;

use App\Models\TestCar1388237257;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1388237257 $testCar1388237257;

                        
    public function mount(TestCar1388237257 $testCar1388237257)
    {
        $this->testCar1388237257 = $testCar1388237257;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1388237257->save();

        return redirect()->route('laragen.admin.test_car1388237257s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1388237257.test' => [
                                                                                                                ],
                    ];
    }
}
