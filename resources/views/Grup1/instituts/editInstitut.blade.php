
    <div  class="modal fade bannerformmodal" id="editInstitut" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h4 class="modal-title2" id="myModalLabel"></h4>
                    </div>
                    <form method="POST" id="formularieditar" action="{{route('instituts.update', $id ?? "idaeditar")}}">
                        @csrf
                        @method('put')
                    <div class="modal-body">
                        <input type="hidden" name="id" id="ins_id" >
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label class="control-label" style="position:relative; top:7px;">Nom Centre Educatiu: </label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" if="nom" id="Nom" name="nom" value="{{old('Nom')}}"  onfocus="focusFuncio(this)" onblur="treuColor(this)" required placeholder="Ingresa un nom">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label class="control-label" style="position:relative; top:7px;">Localitat:</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="Localitat" name="localitat" value="{{old('Localitat')}}"  onfocus="focusFuncio(this)" onblur="treuColor(this)" required placeholder="Ingresa una localitat">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label class="control-label" style="position:relative; top:7px;">Adre??a:</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="Direccio" name="direccio" value="{{old('Direccio')}}"  onfocus="focusFuncio(this)" onblur="treuColor(this)" required placeholder="Ingresa una adre??a">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label class="control-label" style="position:relative; top:7px;">Tel??fon:</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="Telefon" name="telefon" value="{{old('Telefon')}} "onfocus="focusFuncio(this)" onblur="treuColor(this)" required placeholder="Ingresa un tel??fon">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label class="control-label" style="position:relative; top:7px;">CIF:</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="CIF" name="cif" value="{{old('CIF')}}" onfocus="focusFuncio(this)" onblur="treuColor(this)" required placeholder="Ingresa un CIF">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <label class="control-label" style="position:relative; top:7px;">Email:</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="Email" name="email" value="{{old('Email')}}"  onfocus="focusFuncio(this)" onblur="treuColor(this)" required placeholder="Ingresa un email">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
                        <button type="submit" class="btn btn-primary"> Actualitzar Institut</button>
                
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
