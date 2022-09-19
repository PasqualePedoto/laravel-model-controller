@extends('layouts.main')

{{-- @section('title',"#$result->id $result->title") --}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Original Title</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Release Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">{{ $result[0]->id }}</th>
                        <td>{{ $result[0]->title }}</td>
                        <td>{{ $result[0]->original_title }}</td>
                        <td>{{ $result[0]->vote }}</td>
                        <td>{{ $result[0]->date }}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection