@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
          <img src="https://instagram.fnbo3-1.fna.fbcdn.net/vp/b2b7a1aea1f3a3b8366d8b4649b8935c/5DB47138/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fnbo3-1.fna.fbcdn.net" class="rounded-circle">
      </div>
      <div class="col-9 pt-5" >
          <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="#">Add new post</a>
          </div>
          <div class="d-flex"> 
              <div class="pr-5"><strong>153</strong> posts</div>
              <div class="pr-5"><strong>23k</strong> followers</div>
              <div class="pr-5"><strong>212</strong> following</div>
          </div>
          <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
          <div> {{ $user->profile->caption }}</div>
          <div><a href="#">{{ $user->profile->url }}</a></div>
      </div>
  </div>

  <div class="row pt-5">
    <div class="col-4">
        <img src="https://instagram.fnbo3-1.fna.fbcdn.net/vp/8f0fc31b611a2167dcd1dc889ae86333/5DA4161F/t51.2885-15/e35/c97.0.555.555a/57190448_2274762759465641_1976906926338566470_n.jpg?_nc_ht=instagram.fnbo3-1.fna.fbcdn.net" class="w-100" style="height: 350px;">
    </div>
    <div class="col-4">
        <img src="https://instagram.fnbo3-1.fna.fbcdn.net/vp/1bc045fca4108724d8727afd6fe7b0de/5DBB2D18/t51.2885-15/e35/49858637_692138337850207_2812249550293376446_n.jpg?_nc_ht=instagram.fnbo3-1.fna.fbcdn.net" class="w-100" style="height: 350px;">
    </div>
    <div class="col-4">
        <img src="https://instagram.fnbo3-1.fna.fbcdn.net/vp/25a2db9d6f96daf8ca5681af52f6b439/5DBCC65E/t51.2885-15/e35/57251409_126311265211024_8203617265278055615_n.jpg?_nc_ht=instagram.fnbo3-1.fna.fbcdn.net"class="w-100 " style="height: 350px;">
    </div>
</div>
</div>
@endsection
