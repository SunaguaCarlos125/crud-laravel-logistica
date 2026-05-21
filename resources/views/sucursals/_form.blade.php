<label for="ciudad">Ciudad</label>
<input type="text" name="ciudad" value="{{ old('ciudad', $sucursal->ciudad ?? '') }}"> 
<br>

<label for="direccion_fisica">Direccion Fisica</label>
<input type="text" name="direccion_fisica" value="{{ old('direccion_fisica', $sucursal->direccion_fisica ?? '') }}"> 
<br>

<label for="telefono_contacto">Telefono</label>
<input type="text" name="telefono_contacto" value="{{ old('telefono_contacto', $sucursal->telefono_contacto ?? '') }}"> 
<br>