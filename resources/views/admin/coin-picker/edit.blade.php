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
            <h6 class="br-section-label">Add Coin Picker</h6>

            <form action="{{ route('admin.coin-picker.update', $coins->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
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
                                <label class="form-control-label">Coin Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name"  value="{{ old('name', optional($coins)->name) }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="price" value="{{ old('price', optional($coins)->price) }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Percent: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="percent" value="{{ old('percent', optional($coins)->percent) }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-file" type="file" name="image">
                                <img height="50" width="50" src="{{ asset('cryptodoor/'.$coins->image ) }}" alt="">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Coin Movement <span class="tx-danger">*</span></label>
                                <select name="up_down" class="form-control" id="">
                                    <option selected disabled>Select Movement</option>
                                    <option value="1">Up</option>
                                    <option value="0">Down</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->


                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info">Submit Form</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->

            </form>



        </div><!-- br-section-wrapper -->
    </div>

@endsection
