<!DOCTYPE html>
<html>
<head>
    <title>Edit Tenant</title>
</head>
<body>

    <h1>Edit Tenant</h1>

    <form action="{{ route('tenant.update', $tenant->id_tenant) }}" method="POST">

        @csrf
        @method('PUT')

        <p>
            <label>Nama Rental</label><br>
            <input type="text"
                   name="nama_rental"
                   value="{{ $tenant->nama_rental }}">
        </p>

        <p>
            <label>Subdomain</label><br>
            <input type="text"
                   name="subdomain"
                   value="{{ $tenant->subdomain }}">
        </p>

        <p>
            <label>Alamat</label><br>
            <textarea name="alamat">{{ $tenant->alamat }}</textarea>
        </p>

        <p>
            <label>Telepon</label><br>
            <input type="text"
                   name="telepon"
                   value="{{ $tenant->telepon }}">
        </p>

        <p>
            <label>Email</label><br>
            <input type="email"
                   name="email"
                   value="{{ $tenant->email }}">
        </p>

        <p>
            <label>Status</label><br>

            <select name="status">

                <option value="aktif"
                    {{ $tenant->status == 'aktif' ? 'selected' : '' }}>
                    Aktif
                </option>

                <option value="nonaktif"
                    {{ $tenant->status == 'nonaktif' ? 'selected' : '' }}>
                    Nonaktif
                </option>

            </select>
        </p>

        <button type="submit">Update</button>

    </form>

    <br>

    <a href="{{ route('tenant.index') }}">
        Kembali
    </a>

</body>
</html>