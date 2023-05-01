
   @if(session('success'))
       <div class="alert alert-success">
           {{ session('success') }}
       </div>
    @endif

   @if(session('success_footer'))
       <div class="alert alert-success">
           {{ session('success_footer') }}
       </div>
   @endif


   @if($errors->any() || session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

