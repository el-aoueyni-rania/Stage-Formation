@extends('layouts.admin')

@section('main')
<main>
  <br><br><br><br>
    <div class="row">   
        <div class="col-lg-3">
          @include('layouts.nav')       
        </div>
        <div class="col-lg-9">
          <br><br>
            <div class="row"> 
              <h1 style="text-align: center; text-shadow: 2px 2px 5px ; font-style: oblique;">Liste Des Messages</h1>
              <br><br><br>
                <table class="table ">
                    <thead>
                      <tr >
                        <th scope="col">#</th>
                        <th scope="col"> <i class="fas fa-user"style="color: blue"></i> Name </th>
                        <th scope="col"> <i class="fas fa-at" style="color: blue"></i> Email</th>
                        <th scope="col"> <i class="fas fa-phone" style="color: blue"></i> Phone</th>
                        <th scope="col"> <i class="fas fa-envelope" style="color: blue"></i> Message</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $key => $message)
                        <tr>
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $message -> name }} </td>
                            <td>{{ $message -> email}} </td>
                            <td>{{ $message -> phone}} </td>
                            <td>{{ $message -> message}} </td>
                          </tr>
                        @endforeach
                    </tbody>                
                  </table>
                  <div class="mx-auto" style="width: 200px ;">
                    {{ $messages ->links()}} 
                  </div>            
            </div>
        </div>
    </div>
</main>
@endsection