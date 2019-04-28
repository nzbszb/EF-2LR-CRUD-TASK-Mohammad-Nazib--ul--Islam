<div class="row">
  <div class="col-sm-2">
    {!! form::label('title','Title') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
      {{ Form::text('title',NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Post Title...']) }}
      {{ $errors->first('title', '*:message') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('bosy','Description') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('body') ? 'has-error' : "" }}">
      {{ Form::text('body',NULL, ['class'=>'form-control', 'id'=>'body', 'placeholder'=>'Post Description...']) }}
      {{ $errors->first('body', '*:message') }}
    </div>
  </div>
</div>
<div class="form-group offset-10">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>

