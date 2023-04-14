<div class="row">
    <div class="card col-sm-12">

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group  ">
                    <label for="artista" class="control-label">Artista  </label>
                      <select name="artista" id="artista" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($artistas as $row)
                            <option value="{{$row->id}}" {{$row->id==@$ranking->artist_id?"selected":''}}>{{$row->nombre}}</option>
                        @endforeach
                      </select>
                </div>


                <div class="form-group @if($errors->first('region')) has-error @endif ">
                    <label for="region" class="control-label"> Región </label>
                        <select name="region" id="region" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($regiones as $row)
                                <option value="{{$row->id}}" {{$row->id==@$ranking->region_id?"selected":''}}>{{$row->nombre}}</option>
                            @endforeach
                        </select>
                </div>

                <div class="form-group @if($errors->first('genero')) has-error @endif">
                    <label for="genero" class="control-label"> Género </label>
                        <select name="genero" id="genero" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($generos as $row)
                                <option value="{{$row->id}}" {{$row->id==@$ranking->gender_id?"selected":''}}>{{$row->nombre}}</option>
                            @endforeach
                        </select>
                </div>
            </div>

            <div class="col-md-6">

                <div class="card">
                   
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="archivo" id="customfile1" placeholder="Archivo" class="custom-file-input" aria-describedby="fileHelpId">
                                <label for="customfile1" class="custom-file-label">Elija un archivo PDF</label>
                                </div>
                                
                                </div>
                            </div>

                            <div class="col-md-12 placeimages">
                                @if(isset($ranking->archivo))
                
                                <div class="col-md-12 text-center">
                                    <iframe class="ranking_resultados__document" src="/storage/{{$ranking->archivo}}" title="Radio TOP TV" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            </div>
        </div>
    </div>

</div>












