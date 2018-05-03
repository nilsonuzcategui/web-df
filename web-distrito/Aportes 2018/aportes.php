<div class="container">
    <div class="row">
        <div class="col-lg text-center">
            <h2 style="padding-bottom: 20px;">Últimos Aportes Registrados</h2>
        </div>
    </div>
    
    <div class="row aportes-info">
        <div class="col-lg">
<?php
    $ord = isset($_GET['ord'])?$_GET['ord']:NULL;
        
    $sql = sprintf("SELECT DATE(fecha) AS fecha, num_recibo, nombre, descripcion, monto FROM aporte a LEFT JOIN aporte_monto am ON a.idaporte=am.idaporte LEFT JOIN aporte_concepto ac ON am.idconcepto=ac.idconcepto WHERE a.estatus='A' AND a.idtercero=%d".(isset($ord)?" ORDER BY %s":" ORDER BY fecha DESC")." LIMIT 100",
    mysqli_real_escape_string($idConexion,$sesion),mysqli_real_escape_string($idConexion,$ord));
    $rs=mysqli_query($idConexion,$sql);
    if(mysqli_num_rows($rs)>0){
        echo '<div class="aportes-tabla">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">FECHA</th>
                      <th scope="col">Nº RECIBO</th>
                      <th scope="col">CONCEPTO</th>
                      <th scope="col">DESCRIPCION</th>
                      <th scope="col">MONTO</th>
                    </tr>
                  </thead>
                  <tbody>
        ';
        while($row=mysqli_fetch_assoc($rs)){
            echo '
                    <tr>
                      <td>'.$row["fecha"].'</th>
                      <td>'.$row["num_recibo"].'</td>
                      <td>'.$row["nombre"].'</td>
                      <td>'.$row["descripcion"].'</td>
                      <td>'.number_format($row["monto"], 2, ',', '.').'</td>
                    </tr>
            ';
        }
        echo '
                </tbody>
              </table>
            </div>
        ';
    }
?>
        </div>
    </div>
</div>
    