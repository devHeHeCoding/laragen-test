<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car42830700.fields.test') }}" for="7" :errors="$errors->get('testCar42830700.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car42830700.fields.test')}}" name="testCar42830700.test" id="7" wire:model.defer="testCar42830700.test" />
</x-laragen::input.group>