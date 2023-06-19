<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car309679427.fields.test') }}" for="7" :errors="$errors->get('testCar309679427.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car309679427.fields.test')}}" name="testCar309679427.test" id="7" wire:model.defer="testCar309679427.test" />
</x-laragen::input.group>