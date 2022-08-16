@extends('admin.layout.app')
@section('content')

    <div style="visibility: hidden" class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Dashboard</h4>
        </div>
    </div>

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="br-section-label">Add Learn Crypto Article</h6>

        <form action="{{ route('admin.learn-crypto.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="title"  placeholder="News Title">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Image: </label>
                            <input class="form-control form-control-file" type="file" name="image">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Featured</label>
                            <select name="featured" class="form-control" id="">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Description: </label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control ckeditor"></textarea>
                    </div>
                </div><!-- col-4 -->

                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-info">Submit Form</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->

        </form>



    </div><!-- br-section-wrapper -->
</div>



@endsection
