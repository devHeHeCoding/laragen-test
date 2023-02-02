<div class="form-group {{$errors->has('testCar730684024.miss_florine_wintheiser_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car730684024.fields.miss_florine_wintheiser_id') }}        <input type="text"
               id="3"
               name="testCar730684024.miss_florine_wintheiser_id"
               class="form-control"
               placeholder="miss_florine_wintheiser_id"
               wire:model.defer="testCar730684024.miss_florine_wintheiser_id"
        >
        <span class="error-message">
            {{$errors->first('testCar730684024.miss_florine_wintheiser_id')}}        </span>
    </label>
</div>
