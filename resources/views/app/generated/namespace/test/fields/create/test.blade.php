<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car14444972.fields.test') }}" for="7" :errors="$errors->get('testCar14444972.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car14444972.fields.test')}}" name="testCar14444972.test" id="7" wire:model.defer="testCar14444972.test" />
</x-laragen::input.group>