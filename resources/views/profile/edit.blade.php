@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User Profile</div>

                <div class="card-body">
                    @php
                        $item = $user;
                    @endphp
                    @if(isset($item))
                        {{ Form::model($item, ['method' => 'PUT', 'route' => ['profiles.update', $item->id], 'class'=>'form-horizontal']) }}
                    @else
                        {{ Form::open(['route' => 'profiles.store', 'class' => 'form-horizontal' ]) }}
                    @endif
                        <div class="form-body">
                            <h4 class="form-section"><i class="ft-user"></i> User</h4>
                            <div class="form-group row">
                                <label class="col-md-4 label-control text-left">Name*</label>
                                <div class="col-md-5">
                                    {{ Form::text('name', null, ['id' => 'name', 'class' => 'form-control']) }}
                                    @if($errors->has('name'))
                                        <p class="block-tag">
                                            <small class="badge badge-default badge-danger">{{ $errors->first('name') }}</small>
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control text-left">Email*</label>
                                <div class="col-md-5">
                                    {{ Form::email('email', null, ['id' => 'email', 'class' => 'form-control']) }}
                                    @if($errors->has('email'))
                                        <p class="block-tag">
                                            <small class="badge badge-default badge-danger">{{ $errors->first('email') }}</small>
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control text-left">New Password</label>
                                <div class="col-md-5">
                                    {{ Form::password('password', ['class' => 'form-control']) }}
                                    @if($errors->has('password'))
                                        <p class="block-tag">
                                            <small class="badge badge-default badge-danger">{{ $errors->first('password') }}</small>
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-actions row">
                                <div class="col-md-5">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-check-square-o"></i> Save
                                    </button>
                                    &nbsp;&nbsp;
                                    <a href="{{ route('profiles.index') }}">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
