<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car631872373.fields.waldo_johns_id') }}" for="3" :errors="$errors->get('testCar631872373.waldo_johns_id')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car631872373.fields.waldo_johns_id')}}" name="testCar631872373.waldo_johns_id" id="3" wire:model.defer="testCar631872373.waldo_johns_id" />
</x-laragen::input.group>