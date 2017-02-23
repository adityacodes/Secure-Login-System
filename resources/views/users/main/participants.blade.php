@extends('layouts.user')

@section('title', 'Participants')

@section('stylesheets')

    <style>

        .border{
            border-width: 2px;
            border-color: #2b2b2b;
        }

    </style>



@endsection


@section('content')
    <div id="slide-panel">
        <a href="#" class="btn btn-danger opener" id="opener"><i class="glyphicon glyphicon-align-justify"></i></a>
        <div id="panels" class="panel panel-default panel2">
            <div class="ph border panel-body ">
                <h5>My participants</h5>

            </div>
            <div class="panel-body">

            </div>
        </div>
    </div>
    <article id="content">
        <div class="panel panel-default panel1">
            <div class="panel-body ph">
                <
            </div>
        </div>
    </article>
@endsection



@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/js/jqueryui-editable.min.js"></script>

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
        $(function () {
            $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
            $('.tree li.parent_li > span').on('click', function (e) {
                var children = $(this).parent('li.parent_li').find(' > ul > li');
                if (children.is(":visible")) {
                    children.hide('fast');
                    $(this).attr('title', 'Expand this branch').find(' > i').addClass('fa-plus').removeClass('fa-minus');
                } else {
                    children.show('fast');
                    $(this).attr('title', 'Collapse this branch').find(' > i').addClass('fa-minus').removeClass('fa-plus');
                }
                e.stopPropagation();
            });

        });
        $.fn.editable.defaults.mode = 'inline';
        $('.name').editable({
            type: 'text',
            pk: 1,
            url: '/post',
            title: 'Enter username'

        });
        $('#dt').editable();

    </script>



@endsection
