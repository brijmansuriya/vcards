@if(checkTotalVcard())
<div class="card-toolbar custom-toolbar ms-auto">
        <div class="d-flex justify-content-end" >
            <a type="button" class="btn btn-primary" href="{{ route('vcards.create')}}">{{__('messages.vcard.new_vcard')}}</a>
        </div>
    </div>
@endif
