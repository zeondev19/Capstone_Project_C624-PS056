<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

   <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <a href="{{ route('makanan.tambah') }}" class="btn btn-primary mb-3">Tambah Makanan</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>N0</th>
                            <th>Nama Makanan</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Gambar Makanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($makanan as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->nama_makanan }}</td>
                            <td>{{ $row->harga }}</td>
                            <td>{{ $row->deskripsi }}</td>
                            <td> <img style="width: 200px; height: 200px" src="{{asset('posts/'. $row->gambar)}}" alt=""> </td>
                            <td>
                                <a href="{{ route('makanan.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('makanan.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
