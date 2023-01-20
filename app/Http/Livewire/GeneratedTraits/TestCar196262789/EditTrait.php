<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar196262789;

use App\Models\TestCar196262789;
                use App\Models\TestCar2601764815;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar196262789 $testCar196262789;

                                            
    public function mount(TestCar196262789 $testCar196262789)
    {
        $this->testCar196262789 = $testCar196262789;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar196262789->save();

        return redirect()->route('laragen.admin.test_car196262789s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar196262789.test' => [
                                                                                                                ],
                                                'testCar196262789.miguel_willms_id' => [
                                                                                                                ],
                    ];
    }
}
