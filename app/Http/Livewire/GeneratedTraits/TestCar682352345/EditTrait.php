<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar682352345;

use App\Models\TestCar682352345;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar682352345 $testCar682352345;

                        
    public function mount(TestCar682352345 $testCar682352345)
    {
        $this->testCar682352345 = $testCar682352345;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar682352345->save();

        return redirect()->route('laragen.admin.test_car682352345s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar682352345.test' => [
                                                                                                                ],
                    ];
    }
}
