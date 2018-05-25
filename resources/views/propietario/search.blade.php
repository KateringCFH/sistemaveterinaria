{!! Form::open(array('url'=>'administrador/propietario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<section>
    <div class="col-md-5">
        <div class="input-group">
            <input class="form-control" name="searchText" placeholder="Buscar por nombre..." style="padding: 5px" type="text" value="{{$searchText}}">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        Buscar
                    </button>
                </span>
            </input>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
</section>
{{Form::close()}}
