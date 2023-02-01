<div class="form-group {{$errors->has('testCar453760717.millie_predovic_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car453760717.fields.millie_predovic_id') }}        <input type="text"
               id="3"
               name="testCar453760717.millie_predovic_id"
               class="form-control"
               placeholder="millie_predovic_id"
               wire:model.defer="testCar453760717.millie_predovic_id"
        >
        <span class="error-message">
            {{$errors->first('testCar453760717.millie_predovic_id')}}        </span>
    </label>
</div>
