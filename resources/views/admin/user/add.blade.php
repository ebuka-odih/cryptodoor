@extends('admin.layout.app')
@section('content')

    <div style="visibility: hidden" class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Add User</h4>
        </div>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="br-section-label">Add User</h6>

            <form action="{{ route('admin.store_user') }}" method="POST" enctype="multipart/form-data">
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
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name"  >
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="email"  >
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Username: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="username"  >
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Paid</label>
                                <select name="featured" class="form-control" id="">
                                    <option value="0">No</option>
                                    <option value="2">Yes</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="password" name="password"  >
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Confirm Password: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="password" name="password_confirmation"  >
                            </div>
                        </div>

                    </div><!-- row -->


                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info">Create </button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->

            </form>



        </div><!-- br-section-wrapper -->
    </div>



@endsection
