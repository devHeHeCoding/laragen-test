<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car599166462.fields.test') }}" for="7" :errors="$errors->get('testCar599166462.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car599166462.fields.test')}}" name="testCar599166462.test" id="7" wire:model.defer="testCar599166462.test" />
</x-laragen::input.group>