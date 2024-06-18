<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <form action=" {{route('makanan.tambah.simpan') }}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('POST')
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                    </div>
                    <div class="card-body">
                  
                        <div class="form-group">
                            <label for="nama_makanan">Nama Makanan</label>
                            <input type="text" class="form-control" id="nama_makanan" name="nama_makanan"  >
                        </div>
                        <div class="form-group">
                            <label for="gambar">Foto Makanan</label>
                            <input type="file" class="form-control  @error('gambar') is-invalid @enderror" id="gambar" name="gambar"  >
                            @error('gambar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Makanan</label>
                            <input type="number" class="form-control" id="harga" name="harga"  >
                        </div>
                        <div class="form-group">
                            <label for="nama_makanan">Deskripsi Makanan</label>
                            <input type="text" class="form-control" id="deskripsi_makanan" name="deskripsi_makanan" >
                        </div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                </div>
            </div>
        </div>
    </form>
   
</x-app-layout>
