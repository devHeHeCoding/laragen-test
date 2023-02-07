<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1576106383;

use App\Models\TestCar1576106383;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1576106383 $testCar1576106383;

                        
    public function mount(TestCar1576106383 $testCar1576106383)
    {
        $this->testCar1576106383 = $testCar1576106383;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1576106383->save();

        return redirect()->route('laragen.admin.test_car1576106383s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1576106383.test' => [
                                                                                                                ],
                    ];
    }
}
