<div class="card text">
    <div class="card-header text-center">
        Crear nuevos productos
    </div>
    <div class="card-body container mb-4">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="name" value="{{isset($productos->name)?$productos->name:''}}">
            <label for="name">{{'Nombre del producto'}}</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="description" id="description" rows="4">{{isset($productos->description)?$productos->description:''}}</textarea>
            <label for="description" class="control-label">{{'Descripcion'}}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="price" id="price" value="{{isset($productos->price)?$productos->price:''}}">
            <label for="price" class="control-label">{{'Precio'}}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="quantity" id="quantity" value="{{isset($productos->quantity)?$productos->quantity:''}}">
            <label for="quantity" class="control-label">{{'Cantidad'}}</label>
        </div>
        <div class="form-group">
            <label for="image" class="control-label">{{'Imagen'}}</label>
            @if(isset($productos->image))
                <br> <br>
                <img src="{{asset('storage').'/'.$productos->image }}" width="200" class="img-thumbnail img-fluid">
                <br><br>
            @endif
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="categoriaName" id="categoriaName" value="{{isset($productos->categoriaName)?$productos->categoriaName:''}}">
            <label for="categoriaName" class="control-label">{{'Nombre de categoria'}}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="categoria_id" id="categoria_id" value="{{isset($productos->categoria_id)?$productos->categoria_id:''}}">
            <label for="categoria_id" class="control-label">{{'Categoria numero'}}</label>
        </div>
        <center>
            <input type="submit" class="btn btn-danger" value="{{$Modo == 'Crear' ? 'Agregar': 'Modificar'}}">
            <a href="{{url('productos')}}" class="btn btn-warning">Regresar</a>
        </center>
    </div>
</div>
