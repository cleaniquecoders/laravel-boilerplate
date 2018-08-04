<div class="card">
    <div class="card-header" id="heading-{{ $id }}">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{ $id }}" aria-expanded="true" aria-controls="collapse-{{ $id }}">
          {{ $header }}
        </button>
      </h5>
    </div>

    <div id="collapse-{{ $id }}" class="collapse" aria-labelledby="heading-{{ $id }}" 
    	data-parent="#{{ $container_id }}-accordion">
      <div class="card-body">
        {{ $body }}
      </div>
    </div>
</div>