@extends('layout.admin')
@section('content')
<div class="content-wrapper"> 
    <div class="content-header"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="font-weight-bold"> Antrian Terkini</h1>
                    </div>
    
                    <div class="card-body">
                        <div class="my-3">
                            <button class="btn btn-warning" onclick="resetAntrian()">Reset Antrian</button>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            @foreach ($antrians as $a)
                                <div class="col-md-3">
                                    <div class="card" style="min-height: 200px">
                                        <div class="card-body">
                                          
                                                <h5 class="text-center" style="min-height: 75px">{{ $a->nama_poli }}</h5>
                                                <h6 class="text-center mb-2 text-muted">No Antrian</h6>
                                                <h1 class="text-center">{{ $a->kode }}<span id="antri">{{ $a->antrian }}</span></h1>
                                            
                                        </div>
                                        <div class="card-footer">
                                            <center>
                                                <button class="btn btn-sm btn-secondary"
                                                    onclick="nextAntrian({{ $a->id }})">Selanjutnya</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
</div>
@endsection

@section('javascript')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        function nextAntrian(id) {
            $.ajax({
                type: 'POST',
                url: "{{ url('next-antrian') }}",
                data: {
                    id: id,
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        // alert(data.success);
                        location.reload();
                    } else {
                        printErrorMsg(data.error);
                        location.reload();

                    }
                }
            });
        }
    </script>
    <script>
        function resetAntrian() {
            $.ajax({
                type: 'POST',
                url: "{{ url('reset-antrian') }}",
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        location.reload();
                    } else {
                        printErrorMsg(data.error);
                        location.reload();

                    }
                }
            });
        }
    </script>
    
</div>
  
@endsection
