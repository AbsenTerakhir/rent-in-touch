<!DOCTYPE html>
<html>
<head>
    <title>Data Tenant</title>
</head>
<body>

    <h1>Data Tenant Rent In Touch</h1>

    <a href="{{ route('tenant.create') }}">Tambah Tenant</a>
    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Rental</th>
                <th>Subdomain</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($tenants as $tenant)
                <tr>
                    <td>{{ $tenant->id_tenant }}</td>
                    <td>{{ $tenant->nama_rental }}</td>
                    <td>{{ $tenant->subdomain }}</td>
                    <td>{{ $tenant->telepon }}</td>
                    <td>{{ $tenant->email }}</td>
                    <td>{{ $tenant->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data tenant.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>