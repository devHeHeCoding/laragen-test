<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car983603531.fields.test') }}" for="7" :errors="$errors->get('testCar983603531.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car983603531.fields.test')}}" name="testCar983603531.test" id="7" wire:model.defer="testCar983603531.test" />
</x-laragen::input.group>