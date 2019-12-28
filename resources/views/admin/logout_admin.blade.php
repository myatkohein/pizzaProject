@extends("layouts.master")
@section("content")


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            

                
                    You can log out here!
               

                                <a  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <button class = "btn btn-primary btn-lg" type = "submit">Log Out</button>
                                    <!-- {{ __('Logout') }} -->
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        
                
            </div>


            </div>
        </div>
    </div>
</div>
@endsection