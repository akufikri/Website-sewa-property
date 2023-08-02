@extends('template')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="modal-body">
                            <form action="/update_ten/{{ $ten->id }}" method="POST" id="demo-form2" data-parsley-validate
                                class="form-horizontal form-label-left">
                                @csrf
                                @method('PUT')
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="text" id="title" required="required" class="form-control "
                                            name="name" value="{{ $ten->name }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">email <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="email" id="photo" name="email" required="required"
                                            class="form-control" value="{{ $ten->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3 col-sm-3 label-align">Select <span
                                            class="required">*</span></label>
                                    <div class="col-md-9 col-sm-9">
                                        <select class="form-control" name="property_id">
                                            <option value="{{ $ten->id }}">{{ $ten->property->title }}</option>

                                            {{-- @foreach ($prop as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach --}}
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
        </div>
    </section>
@endsection
