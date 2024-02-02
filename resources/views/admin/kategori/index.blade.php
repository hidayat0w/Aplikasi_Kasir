<div class="row p-2">
    <div class="col-md-6">
        <div class="card">

            <div class="card-body">
                <h5 class="p-1"><b>{{ $title }}</b></h5>
                <a href="/admin/kategori/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data </a>

                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>

                    @foreach($kategori as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->name }}</td>
                        <td>
                        <div class="d-flex">
                                    <a href="/admin/kategori/{{ $k->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    <!-- <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
                                    <form action="/admin/kategori/{{ $k->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="d-flex justify-content-center">    
                    {{ $kategori->links() }}
                </div>
            </div>
        </div>
    </div>
</div>