<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1624949126;

use App\Models\TestCar1624949126;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1624949126 $testCar1624949126;

                        
    public function mount(TestCar1624949126 $testCar1624949126)
    {
        $this->testCar1624949126 = $testCar1624949126;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1624949126->save();

        return redirect()->route('laragen.admin.test_car1624949126s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1624949126.test' => [
                                                                                                                ],
                    ];
    }
}
