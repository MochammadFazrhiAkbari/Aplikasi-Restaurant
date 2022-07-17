@extends('layouts.master')

@section('title')
    <title>{{ $title }}</title>
@endsection

@section('content-header')

@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product as $pr)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pr->name }}</td>
                                            <td><img src="{{ Storage::url($pr->image) }}" width="200"></td>
                                            <td>{{ number_format($pr->price, 2) }}</td>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Belum Ada Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
