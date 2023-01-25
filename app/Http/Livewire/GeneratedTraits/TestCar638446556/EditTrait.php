<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar638446556;

use App\Models\TestCar638446556;
                use App\Models\TestCar21856620769;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar638446556 $testCar638446556;

                                            
    public function mount(TestCar638446556 $testCar638446556)
    {
        $this->testCar638446556 = $testCar638446556;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar638446556->save();

        return redirect()->route('laragen.admin.test_car638446556s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar638446556.test' => [
                                                                                                                ],
                                                'testCar638446556.kelley_heller_id' => [
                                                                                                                ],
                    ];
    }
}
