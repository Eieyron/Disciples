@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row d-flex mb-2">

            <div class="col-3 pt-5">
                <img src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/p960x960/73051447_3046078052078437_1650826227029639168_o.jpg?_nc_cat=103&_nc_sid=09cbfe&_nc_eui2=AeFYzBa1j3bBCWfngeSKDyGDiLdeCsU4vT6It14KxTi9Pnejb96_cXyd9kLxQWe0VbDTSPBzBi0QBF73PINPzWfr&_nc_ohc=IzZdl9SaSBgAX8F0K4A&_nc_ht=scontent.fmnl4-1.fna&_nc_tp=6&oh=14c69b0c54b063b93cc023b0e590f2ed&oe=5EB7B902" class="rounded-circle w-100" alt="" srcset="">
            </div>

            <div class="col-6 pt-5">

                <div class="pt-5">
                    <div class="d-flex ">
                        <h1>{{ $user->fullname }}</h1>
                        
                        @if (Auth::user()->username != $user->username)
                            <div>
                                <follow-button
                                    user-id = "{{$user->id}}"
                                    follows = "{{$follows}}"
                                />
                                {{-- </follow-button> --}}
                            </div>
                        @endif
                    </div>
                    <h5>@ {{ $user->username }}</h5>                    
                </div>

                <div>
                    <strong>12</strong> Disciples
                    <strong>{{$followers->count()}}</strong> Follower(s)
                </div>

                <div class="pt-5">
                    {{ $user->profile->description }}
                </div>
            </div>
            
        </div>

        <div>
            <h2>Disciples</h2>
        </div>

        <div class="row pt-3 d-flex justify-content-between">

            @foreach ($followers as $follower)
                <div class="card col-4 p-3 d-flex align-items-center">
                
                    <img src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/p960x960/73051447_3046078052078437_1650826227029639168_o.jpg?_nc_cat=103&_nc_sid=09cbfe&_nc_eui2=AeFYzBa1j3bBCWfngeSKDyGDiLdeCsU4vT6It14KxTi9Pnejb96_cXyd9kLxQWe0VbDTSPBzBi0QBF73PINPzWfr&_nc_ohc=IzZdl9SaSBgAX8F0K4A&_nc_ht=scontent.fmnl4-1.fna&_nc_tp=6&oh=14c69b0c54b063b93cc023b0e590f2ed&oe=5EB7B902" class="rounded-circle w-75 mt-4" alt="" srcset="">

                    <div class="pt-2 p-4 d-flex justify-content-center">

                        <div>
                            <div class="d-flex align-items-baseline">
                                <h4><a href="/profile/{{$follower->id}}">{{$follower->fullname}}</a></h4>
                            
                                <disciple-button
                                    user-id="{{$follower->id}}"
                                    disciple="{{$discipled}}"
                                />
                            </div>

                            {{$follower->profile->description}}
                        </div>

                    </div>
                </div>
            @endforeach
        
        </div>
        
    </div>
</div>
@endsection
