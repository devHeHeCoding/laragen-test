<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1704748392;

use App\Models\TestCar1704748392;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1704748392 $testCar1704748392;

                        
    public function mount(TestCar1704748392 $testCar1704748392)
    {
        $this->testCar1704748392 = $testCar1704748392;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1704748392->save();

        return redirect()->route('laragen.admin.test_car1704748392s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1704748392.test' => [
                                                                                                                ],
                    ];
    }
}
