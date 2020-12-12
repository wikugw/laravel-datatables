<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<div class="container mt-2">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Data Pegawai</h4>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-sm table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url     : "{{route('pegawai.index')}}",
                type    : 'GET'
            },
            columns: [
                {data: 'nama_pegawai', name: 'nama_pegawai'},
                {data: 'jenis_kelamin', name: 'jenis_kelamin'},
                {data: 'email', name: 'email'},
                {data: 'alamat', name: 'alamat'},
            ],
            order: [[0, 'asc']]
        });
    } );
</script>