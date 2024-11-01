@extends('layouts.app')
@section('title', 'Shipper Orders')
@section('content')
<style>
    .redClass {
        background-color: rgb(255, 232, 232)
    }

    td.details-control:before {
        content: "\25bc";
    }

    td.details-control {
        text-align: center;
    }

</style>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Orders</h4>
            {{-- {{ $errors }} --}}
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item">Shipper</li>
                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="w-100">
    {{-- <a href="{{ route('add.convension') }}" class="btn btn-primary">Add Convension</a> --}}
    <div class="card p-4 rounded cShadow">
        <h4>Search</h4>
        <form action="/orders" method="GET">
            <div class="row">
                <div class="form-group col-2">
                    <label for="">Order Number</label>
                    <input type="text" name="ordernumber" placeholder="enter your order # " class="form-control" id="">

                </div>
                <div class="form-group col-2">
                    <label for="">Convension</label>
                    <select name="convension" class="form-select" id="">
                        <option value="">Select Convension</option>
                        @foreach ($convensions as $c)
                        <option @if (Request::get('convension')==$c->id) selected @endif value="{{ $c->id }}">
                            {{ ucwords($c->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2 form-group">
                    <label for="">Vehicle Type</label>
                    <select name="vehicletype" class="form-select" id="">
                        <option value="">Select Vehicle Type</option>
                        @foreach ($vehicle_types as $v)
                        <option @if (Request::get('vehicletype')==$v->id) selected @endif value="{{ $v->id }}">
                            {{ ucwords($v->name) }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-2 form-group">
                    <label for="">Search from : </label>
                    <input type="date" name="start_datePicker" class="form-control" value="">
                </div>
                <div class="col-2 form-group">
                    <label for="">Search to : </label>
                    <input type="date" name="end_datePicker" class="form-control">
                </div>
                <div class="col-2 form-group d-flex align-items-end">
                    <input type="submit" class="btn btn-primary" value="Search">
                </div>
            </div>
        </form>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card p-4 rounded cShadow">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>More Info</th>
                            <th>Order No.</th>
                            <th>Carrier</th>
                            <th>Shipper</th>
                            <th>Price</th>
                            {{-- <th>Description</th> --}}
                            <th>Convention</th>
                            <th>Vehicle Type</th>
                            <th>Order Status</th>
                            <th>Review</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" defer></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
    document.addEventListener('DOMContentLoaded', () => {
        try {
            let start_daterange = document.querySelector('input[name="start_datePicker"]');
            const queryString = window.location.search;
            const parameters = new URLSearchParams(queryString);
            start_daterange.value = parameters.get('start_datePicker') ? parameters.get('start_datePicker') : '01/01/2021';
        } catch (error) {}

        try {
            let end_daterange = document.querySelector('input[name="end_datePicker"]');
            console.log(end_daterange);
            const queryString = window.location.search;
            const parameters = new URLSearchParams(queryString);
            console.log(parameters.get('end_datePicker'));
            end_daterange.value = parameters.get('end_datePicker') ? parameters.get('end_datePicker') : '12/08/2021';
        } catch (error) {}

        // setTimeout(() => {
        //     console.log(daterangepicker);
        //     $(function() {
        //         $('input[name="daterange"]').daterangepicker({
        //             opens: 'left'
        //         }, function(start, end, label) {
        //             $('input[name="start_datePicker"]').val(start.format('YYYY-MM-DD'))
        //             $('input[name="end_datePicker"]').val(end.format('YYYY-MM-DD'));
        //         });
        //     });
        // }, 200);
    })

    function format(d) {
        // `d` is the original data object for the row
        console.log(d);
        return (
            '<h3>Order Information</h3>' +
            '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; width: 100%">' +
            '<tr>' +
            '<td><b>Labour Count:</b>' + "    " + d.labour_count + '</td>' +

            '</tr>' +
            '<tr>' +
            '<td><b>Packaging :</b> ' + "   " +
            d.packaging + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td><b>Assembly / Dissassembly : </b>' + "   " + d.assembly_dissassembly + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td><b>Description: ' + d.description + '</b></td>' +
            '</tr>' +
            '</table>'
        );
    }
    var table = $('#datatable').DataTable({
        processing: true
        , serverSide: true
        , ajax: '{{ Request::fullUrl() }}'.replace('http://', 'https://')
        , columns: [{
                "className": 'details-control'
                , "orderable": false
                , "searchable": false
                , "data": null
                , "defaultContent": ''
            }
            , {
                data: 'order'
                , name: 'order'
            }
            , {
                data: 'carrier'
                , name: 'carrier'
            }
            , {
                data: 'shipper'
                , name: 'shipper'
            }
            , {
                data: 'price'
                , name: 'price'
            },
            // {data: 'description', name: 'description'},
            {
                data: 'convension.name'
                , name: 'convension'
            }
            , {
                data: 'vehicle_type.name'
                , name: 'type'
            }
            , {
                data: 'status'
                , name: 'status'
            }
            , {
                data: 'review'
                , name: 'review'
            }
            , {
                data: 'date'
                , type: 'num'
                , render: {
                    _: 'display'
                    , sort: 'timestamp'
                }
            }
        ]
        , "order": [
            [5, "ASC"]
        ]
        , bFilter: false
        , "createdRow": function(row, data, dataIndex) {
            if (data['checkPercent'] <= 80) {
                $(row).addClass('redClass');
            }
        }
    });

    $('#datatable tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child(format(row.data())).show();
            tr.addClass('shown');
        }
    });


    function changeapproval(e, id) {
        // console.log($(e).is(':checked'));
        fetch('/update/approval/' + id)
            .then((response) => response.json())
            .then((data) => console.log(data));
    }

</script>
@endsection
