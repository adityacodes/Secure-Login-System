<form id="gethelpform" action="{{route('mmmuser.assignment.store')}}" class="easyui-form" method="post" autocomplete="off">
    <div class="fitem">
        <input name="firstname" type="checkbox" required="true">
        WARNING! By entering this you agree to the terms and conditions.
    </div>
    <div class="fitem">
        <label>Participant Name:</label>
       <input class="textbox"  id="p_name" data-options="label:'Name:',required:true" disabled="" 
                value="{{Auth::user()->name}}">
    </div>
    {{Form::token()}}
    <div class="fitem">

        <label>Amount Needed :</label>
        <input name="amount" required="" class="textbox" id="amount">
    </div>
    <div class="fitem">
        <label>Message :</label>
        <textarea type="message" required="" class="easyui-textbox" name="message" id="message"></textarea>
    </div>
</form>
