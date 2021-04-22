@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3 p-5">
                <img src="https://instagram.fcmn2-2.fna.fbcdn.net/v/t51.2885-19/s320x320/175668775_201357994892496_4670044011755257933_n.jpg?tp=1&_nc_ht=instagram.fcmn2-2.fna.fbcdn.net&_nc_ohc=iMisQe0PiCMAX8YUxoA&edm=ALwy07oAAAAA&ccb=7-4&oh=9e96d232ad4c0f19a95f35d0ce376bf3&oe=60A5611B&_nc_sid=261c40" style="max-height:170px" class="rounded-circle">
            </div>
            <div class="col-md-9 p-5 ">
                <div class="d-flex justify-content-between">           
                    <h1 class="pb-2">{{ $user->profile->title }}</h1>
                    <a href="/p/create" class="mt-3">add new post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }} </strong> publications</div>
                    <div class="pr-5"><strong>54k </strong> abonnés</div>
                    <div class="pr-5"><strong>71 </strong> abonnements</div>
                </div>
                <div class="mt-3">
                    <strong>{{ $user->profile->description }}</strong> <br>
                    W E L C O M E T O M Y W O R L D😉 <br>
                    🔸Editing <br>
                    🔸coding <br>
                    🔸anime <br>
                    🔸and me... 🙂<br>
                    ◆◇◈ ◆◇<br>
                    🔹if you want to learn📚 amv editing: <br>
                </div>
                <div class="font-weight-bold">
                    <a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.youtube.com%2Fchannel%2FUCUY5I0xV7ATsl9srfQsaOTQ%2Ffeatured%3Fdisable_polymer%3D1&e=ATPz6uuWUn8g8AOtqxtQON4KaLJql90bom0LovpHJlUHoh4vTnN7zqlM3bxEVVGxr9IUvPrxXsPOo8R9xMgau9g&s=1">{{ $user->profile->url ??  'www.youtube.com/channel/UCUY5I0xV7ATsl9srfQsaOTQ/featured?disable_polymer=1...'}}
                    </a>
                </div>
            </div>
            <div class="row pt-5">
            @foreach ($user->posts as $post)
                
                <div class="col-md-4 mb-5"><img src="/storage/{{ $post->image }}" class="w-100 "></div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
