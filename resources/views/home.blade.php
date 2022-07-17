@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (Auth::user()->level == 'admin')
            @endif
        </div>
        <br>
        @if (Auth::user()->level == 'manager')
    @section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header" style="background-color:  rgb(95, 61, 36);">
                    <h3 class="card-title"><b>Activity Users</b></h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pegawai</th>
                                <th>Activity</th>
                                <th>Times</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activity_log as $item)
                            @foreach ($transaksi as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="font-w600 text-left" style="width: 100px">
                                    <span class="badge">{{ $item->user->level }} -> {{ $item->user->name }}</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-success">{{ $item->description }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-warning">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                </td>
                                 <td>
                                  <a href="{{ route('catatantransaksi.show', $data->id) }}" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        @endif
    </section>
    </section>
@endsection
