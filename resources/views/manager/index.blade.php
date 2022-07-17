<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header" style="background-color:  rgb(95, 61, 36);">
                <h3 class="card-title"><b>Log Activity</b></h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Activity</th>
                            <th>Times</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activity_log as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="font-w600 text-left" style="width: 100px">
                                <span class="badge">{{ $item->user->kasir }} -> {{ $item->user->name }}</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-success">{{ $item->description }}</span>
                            </td>
                            <td>
                                <span class="badge badge-warning">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
