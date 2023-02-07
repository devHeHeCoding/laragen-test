<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar443014738;

use App\Models\TestCar443014738;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar443014738 $testCar443014738;

                        
    public function mount(TestCar443014738 $testCar443014738)
    {
        $this->testCar443014738 = $testCar443014738;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar443014738->save();

        return redirect()->route('laragen.admin.test_car443014738s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar443014738.test' => [
                                                                                                                ],
                    ];
    }
}
