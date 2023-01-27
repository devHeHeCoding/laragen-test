<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2126254712;

use App\Models\TestCar2126254712;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2126254712 $testCar2126254712;

                        
    public function mount(TestCar2126254712 $testCar2126254712)
    {
        $this->testCar2126254712 = $testCar2126254712;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar2126254712->save();

        return redirect()->route('laragen.admin.test_car2126254712s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2126254712.test' => [
                                                                                                                ],
                    ];
    }
}
