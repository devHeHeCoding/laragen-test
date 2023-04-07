<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car2006714873.fields.test') }}" for="7" :errors="$errors->get('testCar2006714873.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car2006714873.fields.test')}}" name="testCar2006714873.test" id="7" wire:model.defer="testCar2006714873.test" />
</x-laragen::input.group>