<div class="form-group {{$errors->has('testCar496868380.aliyah_kunde_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car496868380.fields.aliyah_kunde_id') }}        <input type="text"
               id="3"
               name="testCar496868380.aliyah_kunde_id"
               class="form-control"
               placeholder="aliyah_kunde_id"
               wire:model.defer="testCar496868380.aliyah_kunde_id"
        >
        <span class="error-message">
            {{$errors->first('testCar496868380.aliyah_kunde_id')}}        </span>
    </label>
</div>
