<div class="tab-pane fade addAdmin show active" id="addnew" role="tabpanel">
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
                                    <label class="form-label">{{__('deliveryData.delivery.nom')}}</label>
                                    <input type="text" wire:model.defer="fields.nom" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="{{__('deliveryData.delivery.nom')}}">
                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                            @csrf
                            <div class="col-lg-3 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">{{__('deliveryData.delivery.prenom')}}</label>
                                    <input type="text" wire:model.defer="fields.prenom" name="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="{{__('deliveryData.delivery.prenom')}}">
                                    @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">{{__('deliveryData.delivery.email')}}</label>
                                    <input type="email" wire:model.defer="fields.email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('deliveryData.delivery.email')}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">{{__('deliveryData.delivery.tele')}}</label>
                                    <input type="text" wire:model.defer="fields.tele" name="tele" class="form-control @error('tele') is-invalid @enderror" placeholder="{{__('deliveryData.delivery.tele')}}">
                                    @error('tele')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">{{__('deliveryData.delivery.ville')}}</label>
                                    <select wire:model.defer="fields.city_id" name="city_id" class="custom-select @error('city_id') is-invalid @enderror">
                                        <option wire:key="" value=""></option>
                                        @foreach($villes as $ville)
                                            <option wire:key="{{$ville->id}}" value="{{$ville->id}}">{{$ville->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('city_id')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">{{__('deliveryData.delivery.address')}}</label>
                                    <input type="text" wire:model.defer="fields.address" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="{{__('deliveryData.delivery.address')}}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">{{__('deliveryData.delivery.password')}}</label>
                                    <input type="text" wire:model.defer="fields.password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" onclick="generatePassword()" value="" placeholder="{{__('adminCrud.admin.password')}}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>

                            {{--<div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">{{__('adminCrud.admin.role')}}</label>
                                    <select wire:model.defer="role" name="role" class="custom-select @error('role') is-invalid @enderror">
                                        <option value=""></option>
                                        @foreach($roles as $role)
                                          <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>--}}

                            {{--<div class="col-lg-12">
                                <input type="file" class="dropify">
                            </div>--}}
                            <div class="col-lg-12 mt-3">
                                <button wire:click.prevent="submit()" class="btn btn-primary">{{__('deliveryData.delivery.add.btn')}}</button>
                                {{--<button  class="btn btn-default">Cancel</button>--}}
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



