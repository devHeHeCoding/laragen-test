<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car376579347.fields.test') }}" for="7" :errors="$errors->get('testCar376579347.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car376579347.fields.test')}}" name="testCar376579347.test" id="7" wire:model.defer="testCar376579347.test" />
</x-laragen::input.group>