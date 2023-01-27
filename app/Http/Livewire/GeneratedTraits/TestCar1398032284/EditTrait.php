<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1398032284;

use App\Models\TestCar1398032284;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1398032284 $testCar1398032284;

                        
    public function mount(TestCar1398032284 $testCar1398032284)
    {
        $this->testCar1398032284 = $testCar1398032284;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1398032284->save();

        return redirect()->route('laragen.admin.test_car1398032284s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1398032284.test' => [
                                                                                                                ],
                    ];
    }
}
