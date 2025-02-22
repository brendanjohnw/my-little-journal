<div id="musing-card-{{$musing->entry_id}}" class="col-sm-12 mb-4">
    <div class="card {{$musing->sentiment}}">
        <div class="card-body">
            <div class="row">
                <div class="col-11">
                    <h5 class="card-title musing-title"><b>{{$musing->entry_title}}</b></h5>
                </div>
                <div class="col-1">
                    <livewire:deletion-component :musing="$musing"/>
                </div>
            </div>
            <small>Thoughts on {{$musing->date_title}}</small>
            <hr>
            <p class="card-text">{{$musing->entry_body}}</p>
        </div>
    </div>
</div>