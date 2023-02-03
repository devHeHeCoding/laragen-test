<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar876424200;

use App\Models\TestCar876424200;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar876424200 $testCar876424200;

                        
    public function mount(TestCar876424200 $testCar876424200)
    {
        $this->testCar876424200 = $testCar876424200;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar876424200->save();

        return redirect()->route('laragen.admin.test_car876424200s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar876424200.test' => [
                                                                                                                ],
                    ];
    }
}
