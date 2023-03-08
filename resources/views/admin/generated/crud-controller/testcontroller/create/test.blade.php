<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car18914160.fields.test') }}" for="7" :errors="$errors->get('testCar18914160.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car18914160.fields.test')}}" name="testCar18914160.test" id="7" wire:model.defer="testCar18914160.test" />
</x-laragen::input.group>