@extends('template')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Trash Tenants</h4>
                        </div>
                        <div class="card-body">
                            <table class="table text-center table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email (@)</th>
                                        <th>Property</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($trash_history as $t)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $t->name }}</td>
                                            <td>{{ $t->email }}</td>
                                            <td>
                                                <a href="/properties">{{ $t->property->title }}</a>
                                            </td>
                                            <td>
                                                <a href="/restore_ten/{{ $t->id }}" class="btn btn-danger border-0"
                                                    onclick="alert('Successful data restore!')"><i
                                                        class="fa fa-refresh"></i>
                                                    restore</a>
                                                <a href="/force_delete/{{ $t->id }}" class="btn btn-danger border-0"
                                                    onclick="return confirm('This data will be permanently deleted, are you sure? {{ $t->name }}')">
                                                    <li class="fa fa-trash-o"></li>
                                                    delete
                                                </a>
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
