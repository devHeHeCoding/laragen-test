<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar970372432;

use App\Models\TestCar970372432;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar970372432 $testCar970372432;

                        
    public function mount(TestCar970372432 $testCar970372432)
    {
        $this->testCar970372432 = $testCar970372432;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar970372432->save();

        return redirect()->route('laragen.admin.test_car970372432s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar970372432.test' => [
                                                                                                                ],
                    ];
    }
}
