<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car115576223.fields.test') }}" for="7" :errors="$errors->get('testCar115576223.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car115576223.fields.test')}}" name="testCar115576223.test" id="7" wire:model.defer="testCar115576223.test" />
</x-laragen::input.group>