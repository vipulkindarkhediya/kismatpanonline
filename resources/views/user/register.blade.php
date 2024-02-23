@extends('user.layouts.app')

@section('title', 'E shoping User registration page')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid mb-3">
        <div class="bg-secondary rounded">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h1 class="font-weight-semi-bold text-uppercase mb-3">Sign Up</h1>
                <div class="d-inline-flex">
                    <p class="m-0"><a href="">Home</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0">Sign Up</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid mb-3">
        <div class="white rounded pt-4">
            <div class="text-center mb-5">
                <h2 class="section-title px-5"><span class="px-2">E Shoper User Registration Page</span></h2>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-4 mb-5">
                    <div class="contact-form text-capitalize">
                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <label for="f_name">First Name</label>
                                <input type="text" class="form-control border border-dark rounded mb-2" id="f_name"
                                    name="f_name" value="{{ old('f_name') }}" placeholder="Enter your name" />
                                @if ($errors->has('f_name'))
                                    <div class="alert alert-danger">{{ $errors->first('f_name') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="m_name">Middle Name</label>
                                <input type="text" class="form-control border border-dark rounded mb-2" id="m_name"
                                    name="m_name" value="{{ old('m_name') }}"
                                    placeholder="Enter your father / Husband name" />
                                @if ($errors->has('m_name'))
                                    <div class="alert alert-danger">{{ $errors->first('m_name') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="l_name">Last Name</label>
                                <input type="text" class="form-control border border-dark rounded mb-2" id="l_name"
                                    name="l_name" value="{{ old('l_name') }}" placeholder="Enter your surname" />
                                @if ($errors->has('l_name'))
                                    <div class="alert alert-danger">{{ $errors->first('l_name') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control border border-dark rounded mb-2" id="email"
                                    name="email" value="{{ old('email') }}" placeholder="Enter your email address" />

                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="contact">Contact Number</label>
                                <input type="tel" class="form-control border border-dark rounded mb-2" id="contact"
                                    name="contact" value="{{ old('contact') }}" placeholder="Enter your contact number" />
                                @if ($errors->has('contact'))
                                    <div class="alert alert-danger">{{ $errors->first('contact') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" class="form-control border border-dark rounded mb-2" id="dob"
                                    name="dob" value="{{ old('dob') }}" placeholder="Enter your surname" />
                                @if ($errors->has('dob'))
                                    <div class="alert alert-danger">{{ $errors->first('dob') }}</div>
                                @endif
                            </div>
                            <div class="control-group mb-2">
                                <label for="">gender</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="male" name="gender"
                                        value="male">
                                    <label class="form-check-label text-dark" for="male">male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label text-dark" for="female">female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="other"
                                        value="other">
                                    <label class="form-check-label text-dark" for="other">other</label>
                                </div>
                                @if ($errors->has('gender'))
                                    <div class="alert alert-danger">{{ $errors->first('gender') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control border border-dark rounded mb-2"
                                    id="password" name="password" placeholder="Enter your password" />

                                @if ($errors->has('password'))
                                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control border border-dark rounded mb-2"
                                    id="password_confirmation" name="password_confirmation"
                                    placeholder="Enter your password confirmation" />

                                @if ($errors->has('password_confirmation'))
                                    <div class="alert alert-danger">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="address">address block number and society name</label>
                                <textarea class="form-control border border-dark rounded mb-2" rows="6" id="address" name="address"
                                    value="{{ old('address') }}" placeholder="Enter your address"></textarea>
                                @if ($errors->has('address'))
                                    <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Profile image</label>
                                    <input class="form-control form-control-sm" id="image" name="image"
                                        type="file" value="{{ old('image') }}">
                                    @if ($errors->has('image'))
                                        <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <button type="reset" class="btn py-2 px-4 rounded sendMessageButton">Reset</button>
                                <a href="{{ route('login') }}" class="ml-5 underline">already registered?</a>
                                <button class="btn py-2 px-4 rounded sendMessageButton float-right" type="submit">Sign
                                    Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
