<div class="modal fade" id="myModal-malibilgiler" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Mali Bilgiler</h4>
            </div>
            <div class="modal-body">
                <form id="frmMaliBilgiler" name="frmMaliBilgiler" class="form-horizontal" novalidate="">


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Firma Ünvanı</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="unvani" name="unvani" placeholder="Firma Ünvanı" value="">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Şirket Türü</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sirket_turu" name="sirket_turu" placeholder="Şirket Türü" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Fatura Adresi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fatura_adresi" name="fatura_adresi" placeholder="Fatura Adresi" value="">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Vergi Dairesi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="vergi_dairesi" name="vergi_dairesi" placeholder="Vergi Dairesi" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Vergi Numarası</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="vergi_numarasi" name="vergi_numarasi" placeholder="Vergi Numarası" value="">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Yıllık Cirosu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="yillik_cirosü" name="yıllık_cirosü" placeholder="Yıllık Cirosu" value="">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Sermayesi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sermayesi" name="sermayesi" placeholder="Sermayesi" value="">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save-malibilgiler" value="add">Değişiklikleri Kaydet</button>
                <input type="hidden" id="firma_id" name="firma_id" value="{{$firmas->id}}">
            </div>
        </div>
    </div>
</div>