<?php

if (isset($_POST["codigo"])) {
    $output = '';
    $connect = mysqli_connect("localhost", "root", "", "projetobd");
    $query = "SELECT * FROM pedidos WHERE codigo = '" . $_POST['codigo'] . "'";
    $result = mysqli_query($connect, $query);
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while ($row = mysqli_fetch_array($result)) {
        $output .= ' 
                 <tr>  
                     <td width="10%"><label>Código</label></td>  
                     <td width="30%">' . $row['codigo'] . '</td>  
                </tr>  
                <tr>  
                     <td width="10%"><label>Nome do Livro</label></td>  
                     <td width="30%">' . $row['nome'] . '</td>  
                </tr>  
                <tr>  
                     <td width="10%"><label>Autor</label></td>  
                     <td width="30%">' . $row['autor'] . '</td>  
                </tr>  
                <tr>  
                     <td width="10%"><label>Edição</label></td>  
                     <td width="30%">' . $row['edicao'] . '</td>  
                </tr> 
                <tr>
                <td class="col-md-1"><a class="btn btn-danger" href="imprimirdetalhesPedido.php?codigo='.$row['codigo'].'" role="button">Imprimir</a></td>
                   
                </tr>
                
           ';
    }
    $output .= '  
           </table>  
      </div>  
      ';
    echo $output;
}
?>
 