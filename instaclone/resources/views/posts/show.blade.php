@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row pt-3">
        <div class="col-8">
            <img src="/storage/{{$p->image}}" class="w-100" >
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center"> 
            	<div class="pr-3">
            		<img src="{{ $p->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
            	</div>
            	<div>
            		<div class="font-weight-bold">
            			<a href="/profile/{{$p->user->id}}">
            				<span class="text-dark">{{$p->user->username}}</span>
            			</a>
            			<a href="#" class="pl-3">Follow</a>
            		</div>
            	</div>
            </div>
            <hr>
            <p>
            	<span class="font-weight-bold">
            		<a href="/profile/{{$p->user->id}}">
            			<span class="text-dark">{{$p->user->username}}</span>
            		</a>
            	</span> {{$p->caption}}
        	</p>
        </div>
    </div>    
</div>
@endsection



