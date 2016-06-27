@extends('laravel_dashboard::layout')

@section('content')
  <div class="pass_user">
    <input type="password" name="pass" id="pass" value="{{$password_user}}"/>
  </div>


  <!-- {!! Form::model($user_main,['method' => 'PATCH','route'=>['user_main.update',$user_main->id]]) !!}

      <div class="form-group">
          {!! Form::label('Password', 'Password:') !!}
          {!! Form::text('password',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
      </div>
  {!! Form::close() !!} -->
@stop
