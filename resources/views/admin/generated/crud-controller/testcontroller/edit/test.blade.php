<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car908077359.fields.test') }}" for="7" :errors="$errors->get('testCar908077359.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car908077359.fields.test')}}" name="testCar908077359.test" id="7" wire:model.defer="testCar908077359.test" />
</x-laragen::input.group>