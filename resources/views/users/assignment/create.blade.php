

{!! Form::open(array('route' => 'mmmuser.assignment.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'autocomplete' => 'off', 'id' => 'gethelpform')) !!}
    <div class="fitem">
        <input name="firstname" type="checkbox" required="true">
        WARNING! By entering this you agree to the terms and conditions.
    </div>
    <div class="fitem">
        <label>Participant Name:</label>
       <input class="easyui-textbox"  id="p_name" class="easyui-textbox" required="true" disabled="" value="{{Auth::user()->name}}">
    </div>
    <div class="fitem">

        <label>Amount Needed :</label>
        <input name="amount" required="" class="easyui-textbox" id="amount">
    </div>
    <div class="fitem">
        <label>Message :</label>
        <textarea type="message" required="" class="easyui-textbox" name="message" id="message"></textarea>
    </div>
{!! Form::close() !!}
