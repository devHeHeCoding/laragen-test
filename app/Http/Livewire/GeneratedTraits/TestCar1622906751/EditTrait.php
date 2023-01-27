<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1622906751;

use App\Models\TestCar1622906751;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1622906751 $testCar1622906751;

                        
    public function mount(TestCar1622906751 $testCar1622906751)
    {
        $this->testCar1622906751 = $testCar1622906751;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1622906751->save();

        return redirect()->route('laragen.admin.test_car1622906751s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1622906751.test' => [
                                                                                                                ],
                    ];
    }
}
