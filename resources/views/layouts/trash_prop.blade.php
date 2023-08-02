@extends('template')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table id="datatable" class="table text-center table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Photo</th>
                                        <th>Rent</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($trash as $i)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $i->title }}</td>
                                            <td>
                                                <img width="90px" src="{{ asset('imageFile/' . $i->photo) }}"
                                                    alt="">
                                            </td>
                                            <td>{{ $i->rent }}</td>
                                            <td>{{ Str::limit($i->description, 20) }}</td>
                                            <td>
                                                <a href="/permanent_del/{{ $i->id }}" class="btn btn-danger border-0"
                                                    onclick="return confirm('This data will be permanently deleted, are you sure? {{ $i->name }}')">
                                                    <li class="fa fa-trash-o"></li>
                                                    Delete
                                                </a>
                                                <a href="/restore_prop/{{ $i->id }}" class="btn btn-danger border-0"
                                                    onclick="alert('Successful data restore!')"><i
                                                        class="fa fa-refresh"></i>
                                                    restore</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
