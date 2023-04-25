<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car584964822.fields.test') }}" for="7" :errors="$errors->get('testCar584964822.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car584964822.fields.test')}}" name="testCar584964822.test" id="7" wire:model.defer="testCar584964822.test" />
</x-laragen::input.group>