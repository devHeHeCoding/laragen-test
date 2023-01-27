<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar90856639;

use App\Models\TestCar90856639;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar90856639 $testCar90856639;

                        
    public function mount(TestCar90856639 $testCar90856639)
    {
        $this->testCar90856639 = $testCar90856639;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar90856639->save();

        return redirect()->route('laragen.admin.test_car90856639s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar90856639.test' => [
                                                                                                                ],
                    ];
    }
}
