@extends('admin.layout.app')
@section('content')
    <br>

    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="card-box table-responsive">
                <h4 class="header-title"><b>Community Link</b></h4>

                <table id="" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th class="wd-30p"> Name</th>
                        <th class="wd-60p">Action</th>
                        <th class="wd-60p">Value</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-capitalize">Discord</td>
                        <td>
                            <form action="{{ route('admin.community.store') }}" method="POST">
                                @csrf
                                <input class="form-control" name="discord" value="{{ setting('discord') }}" /><br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </td>
                        <td>{{ setting('discord') }}</td>
                    </tr>
                    <tr>
                        <td class="text-capitalize">Telegram</td>
                        <td>
                            <form action="{{ route('admin.community.store') }}" method="POST">
                                @csrf
                                <input class="form-control" name="telegram" value="{{ setting('telegram') }}" /><br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </td>
                        <td>{{ setting('telegram') }}</td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div><!-- row -->


    </div>

@endsection
