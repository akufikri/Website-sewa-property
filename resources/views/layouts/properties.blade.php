@extends('template')

@section('content')
    <section>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/create_properties" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title
                                    <span class="required">*</span>
                                </label>
                                <div class="col">
                                    <input type="text" id="title" required="required" class="form-control "
                                        name="title">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Photo <span
                                        class="required">*</span>
                                </label>
                                <div class="col">
                                    <input type="file" id="photo" name="photo" required="required"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Rent <span
                                        class="required">*</span>
                                </label>
                                <div class="col">
                                    <input type="number" id="photo" name="rent" required="required"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="middle-name"
                                    class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
                                <div class="col ">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                        style="height: 100px; resize: none" name="description"></textarea>

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
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <a type="button" data-toggle="modal" data-target=".bs-example-modal-lg"
                                class="btn btn-light border-dark"><i class="fa fa-plus"></i> Add Properties</a>
                        </div>
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
                                    @foreach ($properties as $i)
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
                                                </a>
                                                <a href="/show_propr/{{ $i->id }}" class="btn btn-success"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                                <a href="/destroy_propr/{{ $i->id }}"
                                                    onclick="return confirm('Are you sure you delete this?{{ $i->title }}')"
                                                    class="btn btn-warning"><i class="fa fa-close"></i></a>
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
