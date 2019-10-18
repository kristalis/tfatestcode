
    @extends('layouts.apphome')

    @section('content')
    
    
            <div class="content">
                <div class="title m-b-md">
                    TFA IoT Tips Hub
                </div>

                <div class="subtitle m-b-md">
                    Welcome to our IoT Tips page, interested in a weekly tip from us. 
                    <br>Click on the button below to join the hub
                    <br>and we will start sending you our weekly tips to help with your business
                </div>

                 
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-block">Join the Hub</a>
                    </div>
                    <div class="col-md-3">
                    </div>
                        

            </div>
        </div>
    @endsection
