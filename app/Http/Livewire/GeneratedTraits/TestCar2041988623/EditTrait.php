<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2041988623;

use App\Models\TestCar2041988623;
                use App\Models\TestCar21408687087;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2041988623 $testCar2041988623;

                                            
    public function mount(TestCar2041988623 $testCar2041988623)
    {
        $this->testCar2041988623 = $testCar2041988623;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar2041988623->save();

        return redirect()->route('laragen.admin.test_car2041988623s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2041988623.test' => [
                                                                                                                ],
                                                'testCar2041988623.hermina_reichert_id' => [
                                                                                                                ],
                    ];
    }
}
