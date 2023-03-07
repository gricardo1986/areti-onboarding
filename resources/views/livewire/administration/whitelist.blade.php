   
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header pb-0">
                <h6>Whitelist</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">

                    <div class="row">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Buscar: </label>
                                        <input class="form-control form-control-alternative" type="text" wire:model.debounce.500ms="search" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Paginar:</label>
                                        <select class="form-control form-control-alternative" wire:model="paginar">
                                            <option value="5" selected>5</option>
                                            <option value="10">10</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Code (ISO2)</th>
                                        <th>Phone Code</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($countries)
                                        @foreach($countries as $country)
                                        
                                            @if(isset($country['id']))
                                                <tr>
                                                    <td>{{ $country['id'] }}</td>
                                                    <td>{{ $country['name'] }}</td>
                                                    <td>{{ $country['code'] }}</td>
                                                    <td>+{{ $country['phone_code'] }}</td>
                                                    
                                                    <td>
                                                        @if($country['active'])
                                                            <button wire:click="delete({{ isset($country['id'])?  $country['id']: '' }})" onclick="confirm('Do you want to delete this country to the whitelist?') || event.stopImmediatePropagation()">
                                                                Delete to Whitelist
                                                            </button>
                                                        @else
                                                            <button wire:click="add({{ isset($country['id'])?  $country['id']: '' }})" onclick="confirm('Do you want to add this country to the whitelist?') || event.stopImmediatePropagation()">
                                                                Add to Whitelist
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td colspan="4">There's no countries in the whitelist</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{ $countries->links() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>

