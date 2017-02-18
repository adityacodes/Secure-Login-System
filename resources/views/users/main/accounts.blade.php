@extends('layouts.user')


@section('title', 'My Profile')

@section('stylesheets')





@endsection


@section('content')
    <div id="slide-panel">
        <a href="#" class="btn btn-danger opener" id="opener"><i class="glyphicon glyphicon-align-justify"></i></a>
        <div id="panels" class="panel panel-default panel2">
            <div class="ph panel-body ">
                <h5>Account <a href="javascript:void(0);" class="slider-arrow hide"><i class="fa fa-angle-double-right fa-lg raquo" aria-hidden="true"></i></a></h5>

            </div>
            <div class="panel-body">
                <p>Enter your Bitcoin address</p>
                <form class="form-inline">
                    <div class="form-group">
                        <label for="Input">Bitcoin Address:</label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Bitcoin Address">
                    </div>
                </form><br>
                <button type="button" class="btn btn-warning" aria-haspopup="true" aria-expanded="false"><i style="color:green" class="fa fa-check fa-lg" aria-hidden="true"></i> Save</button>
                <button type="button" class="btn btn-warning" aria-haspopup="true" aria-expanded="false"><i style="color:red" class="fa fa-times fa-lg" aria-hidden="true"></i> Cancel</button>

            </div>
        </div>
    </div>
    <article id="content">
        <div class="panel panel-default panel1">
            <div class="panel-body ph">
                <h5>Accounts</h5>
            </div>
            <div class="panel-footer">
                <button type="button" id="add" class="btn btn-default" aria-haspopup="true" aria-expanded="false"><i style="color:green" class="fa fa-plus fa-lg" aria-hidden="true"></i> Add</button>

                <table class="table table-bordered">
                    <tr>
                        <td class="warning">  </td>
                        <td class="warning">ID</td>
                        <td class="warning">First Name</td>
                        <td class="warning">Currency Code</td>
                        <td class="warning">Bank</td>
                        <td class="warning">Card/Account Number </td>
                        <td class="warning">Details</td>
                        <td class="warning">Action</td>

                    </tr>
                    <tr>
                        <td class="warning">1</td>
                        <td class="warning">121920</td>
                        <td class="warning">Cummins</td>
                        <td class="warning">Mavro-USD</td>
                        <td class="warning">Bitcoin</td>
                        <td class="warning">1FDUS7Kexwpj2QVCd1ibyUQ3HsZWy</td>
                        <td class="warning">BTC</td>
                        <td class="warning">
                            <button type="button" id="edit" class="btn btn-default" aria-haspopup="true" aria-expanded="false"><i style="color:green" class="fa fa-pencil fa-lg" aria-hidden="true"></i> Edit</button>
                            <button type="button" class="btn btn-default" aria-haspopup="true" aria-expanded="false"><i style="color:green" class="fa fa-trash-o fa-lg" aria-hidden="true"></i> Delete</button></td>
                    </tr>
                </table>
            </div>

        </div>
    </article>







</div>

@endsection



@section('scripts')
<script>
    $(document).ready(function(){
        $('#opener,#add,#edit').click(function() {
            var panel = $('#slide-panel');
            if (panel.hasClass("visible")) {
                panel.removeClass('visible').animate({'margin-left':'-500px'});
                $('#content').css({'margin-right':'0px'});
            } else {panel.addClass('visible').animate({'margin-left':'0px'});
                $('#content').css({'margin-right':'-500px'});
            }
            return false;
        });
    });
</script>




@endsection