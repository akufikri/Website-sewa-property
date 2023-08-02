@extends('template')

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card mt-5">
                        <div class="card-header"></div>
                        <div class="modal-body">
                            <form action="/update_propr/{{ $data->id }}" method="POST" id="demo-form2"
                                data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col">
                                        <input type="text" id="title" required="required" class="form-control "
                                            name="title" value="{{ $data->title }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Photo <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col">
                                        <input type="text" readonly id="photo" name="photo" required="required"
                                            class="form-control" value="{{ $data->photo }}" style="cursor: none;">
                                        <input type="file" id="photo" name="photo" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Rent <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col">
                                        <input type="number" id="photo" name="rent" required="required"
                                            class="form-control" value="{{ $data->rent }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name"
                                        class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
                                    <div class="col ">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                            style="height: 100px; resize: none" name="description">{{ $data->description }}</textarea>

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
        </div>
    </section>
@endsection
