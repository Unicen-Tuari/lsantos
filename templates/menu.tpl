        <div class="section cort" id="me">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Menu</h1>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>HORARIO</th>
                            <th>SABADO</th>
                            <th>DOMINGO</th>
                        </tr>
                    </thead>
                    <tbody id="menu-lista"></tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <select id="horario">
                                    <option value="Almuerzo">Almuerzo</option>
                                    <option value="Cena">Cena</option>
                                </select>
                            </td>
                            <td>
                                <input id="sabado" class="form-control" type="text" maxlength="20" placeholder="ingrese el menu">
                            </td>
                            <td>
                                <input id="domingo" class="form-control" type="text" maxlength="20" placeholder="ingrese el menu">
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <button id="agregar-menu" type="button" class="btn btn-success btn-lg center-block">Agregar Menu</button>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row"></div><div class="row"></div><div class="row"></div>
            </div>
            <div class="section text-center" id="cn">
                <div class="container"></div>

            </div>
        </div>
  <script src="js/tabla.js"></script>
