@csrf
<tr>
  <td colspan="4">
    <div class="custom-file" style="display: flex; align-items: center;">
      <input type="file" name="image" class="custom-file-input" id="customFile" style="flex: 0.1;">
      <label class="custom-file-label" for="customFile">Seleccione archivo</label>
    </div>
  </td>
</tr>

</tr>
    <tr>
        <th>Titulo</th>
        <td><input type="text" name="titulo" value="{{ old('titulo', $servicio->titulo) }}"></td>
    </tr>
    <tr>
        <th>Descripcion</th>
        <td><input type="text" name="descripcion" value="{{ old('descripcion', $servicio->descripcion)}}"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><button>{{$btnText}}</button></td>
    </tr>
