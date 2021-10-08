@extends('base')

@section('content')


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src=https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js></script>

    <h3>Senarai Perolehan</h3>
    </div>
    <!-- Else bootstrap marketplace -->
    <br><br>

    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
        <div class="container border-bottom">
            <div class="row justify-space-between py-2">
                <div class="col-lg-3 me-auto">
                </div>

                <a href="perancangan/create" style="text-align:right" class="btn bg-gradient-success w-auto me-2">Cipta
                    Perolehan</a>

                <br><br>


                <table id="example-table1" class="order-column" style="width:100%">

                    <thead>
                        <tr>
                            <th>Tahun Perolehan</th>
                            <th>Nama Perolehan</th>
                            <th>Kategori Perolehan</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($perancangan as $perancangan)
                            <tr>

                                <td>{{ $perancangan->tahun_pelan }}</td>
                                <td>{{ $perancangan->tajuk_perolehan }}</td>
                                <td>{{ $perancangan->kategori }}</td>
                                <td>{{ $perancangan->status }}</td>
                                <td>
                                    <a href="/cetakpelan/{{ $perancangan->id }}">Cetak</a>&nbsp; &nbsp; &nbsp;
                                    <a href="/perancangan/{{ $perancangan->id }}/edit"><img src="/edit_icon.png"
                                            width=15px;>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>

    <script>
        function filterGlobal() {
            $('#example').DataTable().search(
                $('#global_filter').val(),
                $('#global_regex').prop('checked'),
                $('#global_smart').prop('checked')
            ).draw();
        }

        function filterColumn(i) {
            $('#example').DataTable().column(i).search(
                $('#col' + i + '_filter').val(),
                $('#col' + i + '_regex').prop('checked'),
                $('#col' + i + '_smart').prop('checked')
            ).draw();
        }

        // $(document).ready(function() {
        //     $('#example-table1').DataTable();

        //     $('input.global_filter').on('keyup click', function() {
        //         filterGlobal();
        //     });

        //     $('input.column_filter').on('keyup click', function() {
        //         filterColumn($(this).parents('tr').attr('data-column'));
        //     });
        // });

        $(document).ready(function() {
            $('#example-table1').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });
    </script>


@stop
