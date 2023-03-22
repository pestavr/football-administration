@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>Ορισμοί Διαιτητών</small>
    </h1>
@endsection

@section('after-styles')
    {{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
    {{ Html::style("https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css")}}
    {{ Html::style(asset('assets/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css'))}}
    {{ Html::style("https:////code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css")}}
    
   
@endsection

@section('content')

<div class="box box-success">
        <div class="box-header with-border">
             <h3 class="box-title">Ορισμός Διαιτητών Ανά Ημερομηνία</h3>

            <div class="box-tools pull-right">
                @include('backend.orismos.partials.header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                                <label for="iso">Ημερομηνία Από :</label>
                                {!! Form::input('text','date_from',\Carbon\Carbon::parse(session()->get('date_from'))->format('d/m/Y'), array('class'=>'form-control datepicker', 'id'=>'date_from', 'data-date-format'=>'mm/dd/yyyy', 'placeholder'=>'Από')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                                <label for="iso">Ημερομηνία Έως:</label>
                                {!! Form::input('text','date_to',\Carbon\Carbon::parse(session()->get('date_to'))->format('d/m/Y'), array('class'=>'form-control datepicker', 'id'=>'date_to',  'placeholder'=>'Μέχρι')) !!}
                    </div>
                </div>
                <div class="col-md-4">
                   
                </div>
               <div class="row">
                    <div class="col-md-12">
                        <CENTER><button type="button" id="show" class="btn btn-primary">Εμφάνιση</button></CENTER>
                    </div>
                </div>   
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

{!! Form::open(array('url' => route("admin.orismos.referee.grades.saveSelected"))) !!}
<div class="box box-danger">
        <div class="box-header with-border">
             <h3 class="box-title">Βαθμολογία Διαιτητών</h3>

            <div class="box-tools pull-right">
               @include('backend.program.partials.buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="match-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="selectAll" id="selectAll" value="0"  checked="checked"></th>
                        <th>Κατηγορία</th>
                        <th>Ημ/νια-Γήπεδο</th>
                        <th>Αναμέτρηση</th>
                        <th>Διαιτητής</th>
                        <th>1ος Βοηθός</th>
                        <th>2ος Βοηθός</th>   
                        <th><i class="glyphicon glyphicon-cloud-upload"></i> Δημοσίευση<br/>
                            <center><input type="checkbox" name="selectAll-publ" id="selectAll-publ" value="0"  checked="checked"></center>
                        </th>  
                        
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
</div><!--box-->
{!! Form::close() !!}
@endsection

@section('after-scripts')
   {{ Html::script("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables-extend.js") }}
    {{ Html::script("https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js")}}
    {{ Html::script("//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js")}}
    {{ Html::script("//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js")}}
    {{ Html::script("//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js")}}
    {{ Html::script(asset("assets/bootstrap-datetimepicker-master/bootstrap/js/bootstrap.min.js")) }}
    {{ Html::script(asset("assets/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js")) }}
    {{ Html::script(asset("assets/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.el.js")) }}
    {{ Html::script(asset("assets/jquery-ui-1.12.1.custom/jquery-ui.min.js")) }}
    {{ Html::script(asset("assets/bootstrap-datetimepicker-master/bootstrap/js/bootstrap.min.js")) }}
    

    <script>
        $(document).ready(function () {
            $('#selectAll').change(function(){
                var check=$(this).is(':checked');
                $('.match').each(function(index, element){
                    $(element).prop('checked',check);
                });
            });
            $('#selectAll-publ').change(function(){
                var check=$(this).is(':checked');
                $('.publ').each(function(index, element){
                    $(element).prop('checked', check);
                });
            });

             $(document).on('change','.publ',function(){
                 /*check for the 15 days same team vuikation*/
                  var check=$(this).is(':checked');
                  var match=$(this).val();
                  var stat=(check)?0:1;
                            $.ajax( {
                                  url: "{{ route('admin.orismos.referee.savePubl') }}",
                                  data: {
                                    match_id: match,
                                    status: stat
                                  },
                                  success: function( data ) {
                                            
                                  },
                                  error: function (xhr, err) {
                                      //if (err === 'parsererror')
                                          console.log(xhr.responseText);
                                          exit();
                                  }
                                });
             });


            var buttonCommon = {
                exportOptions: {
                    format: {
                        body: function ( data, row, column, node ) {
                            // Strip $ from salary column to make it numeric
                            return column === 5 ?
                                data.replace( /[$,]/g, '' ) :
                                data;
                        }
                    }
                }
            };
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    }
                });
    var oTable= $('#match-table').dataTable({
                processing: false,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route("admin.orismos.referee.grades.getDate") }}',
                    type: 'post',
                    beforeSend: function (xhr) {
                        var token = $('input[name="_token"]').val();
                        
                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: function(d){
                            d.date_from= $('#date_from').val();
                            d.date_to=$('#date_to').val();
                             },
                    error: function (xhr, err) {
                        //if (err === 'parsererror')
                            console.log(xhr.responseText);
                            exit();
                    }
                },
                columns: [
                    {data: 'check', name: 'check', sortable: false},
                    {data: 'category', name: 'category', sortable: false},
                    {data: 'date-court', name: 'date-court', sortable: false},
                    {data: 'match', name: 'match', sortable: false},
                    {data: 'referee', name: 'referee', sortable: false},
                    {data: 'helper1', name: 'helper1', sortable: false},
                    {data: 'helper2', name: 'helper2', sortable: false},
                    {data: 'ref_publ', name: 'ref_publ', sortable: false}
                ],
                columnDefs: [
                               { type: 'date-euro', targets: 1 }
                             ],
                "lengthMenu": [ 10, 25, 50, 75, -1 ],
               
                
                searchDelay: 1500, 
                "fnDrawCallback": function( ) {
                                  
                                   
                                   
                                }
               
            });
    $('#show').on('click', function(e){
        oTable.fnDraw();
        e.preventDefault();
    });

     $(document).on('focus','#date_from', function(){
                            
                            $(this).datetimepicker({
                                        language:  'el',
                                        format: "dd/mm/yyyy",
                                        autoclose: true,
                                        todayBtn: true,
                                        minView: 2,
                                        pickerPosition: "bottom-left",
                                        initialDate: new Date()
                                    })
                                   
                            
                            });
    $(document).on('focus','#date_to', function(){
                           
                            $(this).datetimepicker({
                                        language:  'el',
                                        format: "dd/mm/yyyy",
                                        autoclose: true,
                                        todayBtn: true,
                                        minView: 2,
                                        pickerPosition: "bottom-left",
                                        initialDate: new Date()
                                    })
                                   
                            
                            });

        });
    </script>
@endsection