@extends('layouts.admin')

@section('main')
<main>
  <br><br><br><br>
    <div class="row">   
        <div class="col-lg-3">
          @include('layouts.nav')       
        </div>
        <div class="col-lg-9">
          <br><br><br><br>
            <div class="row"> 
              <h1 style="text-align: center">Liste Des Messages</h1>
              <br><br><br>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Email</th>
                        <th scope="col"> Phone</th>
                        <th scope="col"> Message</th>
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
    <br><br><br><br><br><br><br><br>
</main>
@endsection