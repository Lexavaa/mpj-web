<x-AdminLayout title="Informasi Akun">

    <div class="card p-2">
        <h5 class="card-header">Hoverable rows</h5>
        <div class="table-responsive text-nowrap">
            <table id="myTable" class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Pesantren</th>
                        <th>Kru</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($user as $users)
                        @foreach ($profile as $profiles)
                            @if ($users->id == $profiles->users_id)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{ $profiles->nama_pesantren }}</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        @foreach ($crew as $crews)
                                            @if ($users->id == $crews->users_id)
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="{{ $crews->nama_kru }}">
                                                        <img src="{{ asset('storage/' . $crews->foto_kru) }}"
                                                            alt="Avatar" class="rounded-circle" />
                                                    </li>
                                            @endif
                                        @endforeach
                                        </ul>
                                    </td>
                            @endif
                        @endforeach
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<x-TableScriptMolecules />
</x-AdminLayout>
