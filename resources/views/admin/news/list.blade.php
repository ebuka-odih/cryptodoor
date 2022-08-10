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
        <h6 class="br-section-label mb-3">All Crypto News</h6>
        <a href="{{ route('admin.crypto-news.create') }}" class="mt-3 mb-3 btn btn-primary">Add News</a>

        <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table mg-b-0">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $item)
                <tr>
                    <th scope="row">{{ date('d M, Y', strtotime( $item->created_at)) }}</th>
                    <td><img height="100" width="100" src="{{ asset('images/'.$item->image ) }}" alt=""></td>
                    <td>{{ $item->title }}</td>
                    <td>
                       <div class="row">
                            <div class="mr-3">
                                <a href="{{ route('admin.crypto-news.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            </div>
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
