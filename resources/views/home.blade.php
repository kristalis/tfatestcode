@extends('layouts.apphome')

@section('content')

<div class="container">
        <div class="content">
                <div class="title m-b-md">
                    <a href="/">TFA IoT Tips Hub</a>
                </div>

               
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table width="100%">
                      
                        <tr>
                            <td width="40%"><strong>Name</td>
                            <td width="40%" ><strong>Email</td>
                            <td></td>
                            <td ></td>
                          
                        </tr>
                    
                   
                        @foreach($users as $user)
                       <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}} </td>
                            <td> 
                               @auth
                                <a href="{{ route('home.edit',$user->id)}}" class="btn btn-primary">
                                    <i class="fa fa-btn fa-edit"></i> 
                                </a>
                                @endauth
                            </td>
                            <td>
                                @auth 
                                <form action="{{ route('home.destroy',$user->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>
                                    </button>
                                </form>
                                @endauth                                 
                            </td>
                            
                        </tr>
                      @endforeach   
                  
                        
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
    @guest
    <div class="row justify-content-center">
        <div class="col-md-6 m-t-md">
            <a class="nav-link btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
        </div>
    </div>
    @endguest
    @auth
    <div class="row justify-content-center">
        <div class="col-md-6 m-t-md">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
        </div>
    </div>
        
    @endauth
</div>
@endsection
