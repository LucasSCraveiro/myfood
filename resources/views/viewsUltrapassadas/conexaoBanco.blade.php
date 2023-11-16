{{--

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'db_larafood';

    $mysqli = new mysqli($servidor,$usuario,$senha,$banco);

    if (mysqli_connect_errno()) trigger_error(mysqli_connect_errno());

    $sql = "SELECT nm_restaurante, qt_nota_restaurante, ds_tipo_restaurante, qt_distancia_restaurante, ds_espera_restaurante, vl_media_restaurante FROM tb_restaurante"
    $resultado = $mysqli->query($sql);
    $restaurante = $resultado->fetch_array();

 --}}