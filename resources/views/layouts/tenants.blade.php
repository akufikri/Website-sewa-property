@extends('template')

@section('content')
    {{-- Modal --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/insert_ten" method="POST" id="demo-form2" data-parsley-validate
                        class="form-horizontal form-label-left">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9">
                                <input type="text" id="title" required="required" class="form-control "
                                    name="name">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">email <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9">
                                <input type="email" id="photo" name="email" required="required"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 label-align">Select <span
                                    class="required">*</span></label>
                            <div class="col-md-9 col-sm-9">
                                <select class="form-control" name="property_id">
                                    @foreach ($property as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button">Cancel</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </form>

            </div>
        </div>
    </div>
    {{-- end Modal --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <a type="button" data-toggle="modal" data-target=".bs-example-modal-lg"
                            class="btn btn-light border-dark"><i class="fa fa-plus"></i> Add Tenants</a>
                    </div>
                    <div class="card-body">

                        <table id="datatable" class="table text-center table-bordered" style="width:100%">
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
                                @foreach ($tenants as $t)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $t->name }}</td>
                                        <td>{{ $t->email }}</td>
                                        <td>
                                            <a href="/properties">{{ $t->property->title }}</a>
                                        </td>
                                        <td>
                                            <a href="/force_delete/{{ $t->id }}" class="btn btn-danger border-0"
                                                onclick="return confirm('This data will be permanently deleted, are you sure? {{ $t->name }}')">
                                                <li class="fa fa-trash-o"></li>
                                            </a>
                                            <a href="/show_ten/{{ $t->id }}" class="btn btn-success border-0"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                            <a href="/destroy_ten/{{ $t->id }}"
                                                onclick="return confirm('Are you sure you delete this?{{ $t->name }}')"
                                                class="btn btn-warning border-0"><i class="fa fa-close"></i></a>


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
@endsection
