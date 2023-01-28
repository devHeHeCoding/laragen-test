<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1018942994;

use App\Models\TestCar1018942994;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1018942994 $testCar1018942994;

                        
    public function mount(TestCar1018942994 $testCar1018942994)
    {
        $this->testCar1018942994 = $testCar1018942994;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1018942994->save();

        return redirect()->route('laragen.admin.test_car1018942994s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1018942994.test' => [
                                                                                                                ],
                    ];
    }
}
