<x-laragen::input.group label="{{ @trans('cruds.test-car776051337.fields.test') }}" for="7" :errors="$errors->get('testCar776051337.test')" >
    <x-laragen::input.text placeholder="test" name="testCar776051337.test" id="7" wire:model.defer="testCar776051337.test" />
</x-laragen::input.group>