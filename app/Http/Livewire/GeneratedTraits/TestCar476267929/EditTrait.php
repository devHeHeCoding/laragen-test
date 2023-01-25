<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar476267929;

use App\Models\TestCar476267929;
                use App\Models\TestCar2496564315;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar476267929 $testCar476267929;

                                            
    public function mount(TestCar476267929 $testCar476267929)
    {
        $this->testCar476267929 = $testCar476267929;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar476267929->save();

        return redirect()->route('laragen.admin.test_car476267929s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar476267929.test' => [
                                                                                                                ],
                                                'testCar476267929.mr._gilberto_kassulke_id' => [
                                                                                                                ],
                    ];
    }
}
