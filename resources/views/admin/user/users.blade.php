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
            <h6 class="br-section-label mb-3">All Users</h6>
            <a href="{{ route('admin.add.user') }}" class="mt-3 mb-3 btn btn-primary">Add User</a>

            <div class="bd bd-gray-300 rounded table-responsive">
                <table class="table mg-b-0">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Membership</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $item)
                        <tr>
                            <th scope="row">{{ date('d M, Y', strtotime( $item->created_at)) }}</th>
                            <th >{{ $item->name }}</th>
                            <th >{{ $item->email }}</th>
                            <td>{!! $item->status()  !!}</td>
                            <td>
                                <div class="row">
                                    @if($item->confirm_payment < 2)
                                    <div class="mr-3">
                                        <a href="{{ route('admin.paid', $item->id) }}" class="btn btn-sm btn-success">Paid</a>
                                    </div>
                                    @endif
                                    <div class="">
                                        <form method="POST" action="{!! route('admin.crypto-news.destroy', $item->id) !!}" accept-charset="UTF-8">
                                            <input name="_method" value="DELETE" type="hidden">
                                            {{ csrf_field() }}

                                            <div class="btn-group btn-group-xs pull-right" role="group">
                                                <button type="submit" class="btn btn-sm  btn-danger"  onclick="return confirm(&quot;Delete News?&quot;)">
                                                    Delete
                                                </button>

                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- bd -->


        </div><!-- br-section-wrapper -->
    </div>

@endsection
