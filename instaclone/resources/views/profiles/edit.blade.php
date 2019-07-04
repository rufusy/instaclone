@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h4>Edit profile</h4>
                </div>


                <!--  title-->
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">{{ __('Profile title') }}</label>

                    <input      id="title" 
                                type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                name="title" 
                                value="{{ old('description') ?? $user->profile->title }}" 
                                
                                autocomplete="title" 
                                autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <!-- END title -->


                <!--  description-->
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">{{ __('Profile description') }}</label>

                    <input      id="description" 
                                type="text" 
                                class="form-control @error('description') is-invalid @enderror" 
                                name="description" 
                                value="{{ old('description') ?? $user->profile->description }}" 
                                
                                autocomplete="description" 
                                autofocus>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <!-- END description -->


                 <!--  url-->
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">{{ __('Profile url') }}</label>

                    <input      id="url" 
                                type="text" 
                                class="form-control @error('url') is-invalid @enderror" 
                                name="url" 
                                value="{{ old('url') ?? $user->profile->url}}" 
                                
                                autocomplete="url" 
                                autofocus>

                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <!-- END url -->


                <!-- IMAGE -->
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Profile Image') }}</label>

                    <input type="file" class="form-control-file" id="image" name="image">
                        @error('image')
                                <strong>{{ $message }}</strong>
                        @enderror
                </div>
                <!-- END IMAGE -->

                <div class="form-group row pt-3">
                    <button type="submit" class="btn btn-primary align-center">Save profile</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

