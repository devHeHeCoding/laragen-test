<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1142857027;

use App\Models\TestCar1142857027;
                use App\Models\TestCar22021787306;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1142857027 $testCar1142857027;

                                            
    public function mount(TestCar1142857027 $testCar1142857027)
    {
        $this->testCar1142857027 = $testCar1142857027;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1142857027->save();

        return redirect()->route('laragen.admin.test_car1142857027s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1142857027.test' => [
                                                                                                                ],
                                                'testCar1142857027.elena_effertz_i_i_id' => [
                                                                                                                ],
                    ];
    }
}
