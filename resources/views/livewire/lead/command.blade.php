<div class="tab-pane fade addLead show active" id="addnew" role="tabpanel">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                        {{--@if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif--}}
                    <form>

                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{__('leadData.lead.nom')}}</label>
                                        <input type="text" wire:model.defer="commands.nom" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="{{__('leadData.lead.nom')}}">
                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                                <input type="hidden" wire:model="commanderId" class="haymacproduction">
                                <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{__('leadData.lead.prenom')}}</label>
                                        <input type="text" wire:model.defer="commands.prenom" name="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="{{__('leadData.lead.prenom')}}">
                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{__('leadData.lead.email')}}</label>
                                        <input type="email" wire:model.defer="commands.email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('leadData.lead.email')}}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{__('leadData.lead.ville')}}</label>
                                        <input type="text" wire:model.defer="commands.ville" name="ville" class="form-control @error('ville') is-invalid @enderror" placeholder="{{__('leadData.lead.ville')}}">
                                        @error('ville')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{__('leadData.lead.address')}}</label>
                                        <input type="text" wire:model.defer="commands.address" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="{{__('leadData.lead.address')}}">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <input type="hidden" wire:model="commanderId" class="haymacproduction">
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{__('leadData.lead.tele')}}</label>
                                        <input type="text" wire:model.defer="commands.tele" name="tele" class="form-control @error('tele') is-invalid @enderror" placeholder="{{__('leadData.lead.tele')}}">
                                        @error('tele')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{__('leadData.lead.product')}}</label>
                                        <select wire:model.defer="commands.product_id" name="product_id" class="custom-select @error('product_id') is-invalid @enderror">
                                            <option wire:key="" value=""></option>
                                                @foreach($products as $product)
                                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                                @endforeach
                                        </select>
                                        @error('product_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{__('leadData.lead.quantity')}}</label>
                                        <input type="number" wire:model.defer="commands.command_quantity" name="command_quantity" class="form-control @error('command_quantity') is-invalid @enderror" placeholder="{{__('leadData.lead.quantity')}}">
                                        @error('command_quantity')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{__('leadData.lead.total')}}</label>
                                        <input type="text" wire:model.defer="commands.command_price" name="command_price" class="form-control @error('command_price') is-invalid @enderror" placeholder="{{__('leadData.lead.total')}}">
                                        @error('command_price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">{{__('leadData.lead.notes')}}</label>
                                        <textarea wire:model.defer="commands.notes" name="notes" class="form-control @error('notes') is-invalid @enderror">

                                        </textarea>
                                        @error('notes')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                @csrf
                                {{--<div class="col-lg-12">
                                    <input type="file" class="dropify">
                                </div>--}}
                                <div class="col-lg-12 mt-3">
                                    <button wire:click.prevent="generateCommand()" class="btn btn-primary">{{__('leadData.lead.add.btn')}}</button>
                                    {{--<button  class="btn btn-default">Cancel</button>--}}
                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>