<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar955786819;

use App\Models\TestCar955786819;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar955786819 $testCar955786819;

                        
    public function mount(TestCar955786819 $testCar955786819)
    {
        $this->testCar955786819 = $testCar955786819;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar955786819->save();

        return redirect()->route('laragen.admin.test_car955786819s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar955786819.test' => [
                                                                                                                ],
                    ];
    }
}
