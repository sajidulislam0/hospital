@extends('master.master')
@section('main_content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Add Doctor</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="">Doctors</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Add Doctor</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Basic Information</header>
                </div>
                <div class="card-body col-md-6 offset-md-3 " id="bar-parent">
                    {!! Form::open(array('url' => '#', 'class' => 'test','files' =>true)) !!}
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            {!! Form::label('Your name:') !!}
                            {!! Form::text('your_name', old('your_name'), ['class'=>'form-control', 'placeholder'=>'Enter Your Full Name']) !!}
                        </div>
                        <div class="form-group col-md-6 ">
                            {!! Form::label('Username:') !!}
                            {!! Form::text('username', old('username'), ['class'=>'form-control', 'placeholder'=>'johndoe']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('Email:') !!}
                        {!! Form::email('email_address', old('email_address'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            {!! Form::label('Password:') !!}
                            {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'******']) !!}
                        </div>
                        <div class="form-group col-md-6 ">
                            {!! Form::label('Re-enter Password:') !!}
                            {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'******']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            {!! Form::label('Designation:') !!}
                            {!! Form::text('designation', old('designation'), ['class'=>'form-control', 'placeholder'=>'Enter Your Designation']) !!}
                        </div>
                        <div class="form-group col-md-6 ">
                            {!! Form::label('Department:') !!}
                            {!! Form::select('department', 
                            [
                            'Neurology' => 'Neurology',
                            'Orthopedics' => 'Orthopedics',
                            'Gynaecology' => 'Gynaecology',
                            'Microbiology' => 'Microbiology',
                            'Radiotherapy' => 'Radiotherapy',
                            'Pharmacy' => 'Pharmacy'
                            ]
                            ,null , ['placeholder' => 'Choose...','class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            {!! Form::label('Birth date:') !!}
                            {!! Form::text('birth_date', old('birth_date'), ['class'=>'form-control datepicker', 'placeholder'=>'10-02-1990']) !!}
                        </div>
                        <div class="form-group col-md-6 ">
                            {!! Form::label('Joining date:') !!}
                            {!! Form::text('joining_date', old('joining_date'), ['class'=>'form-control datepicker', 'placeholder'=>'10-02-2018']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('Message:') !!}
                        {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Profile Picture:') !!}
                        {!! Form::file('profile_picture',['class'=>'form-control p-0']) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Submit',array('class' => 'btn btn-success'))}}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>    


@endsection