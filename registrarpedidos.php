<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden; 
            background-color: #00BFFF;
        }
        .container-custom {
            background-color: #87CEFA;
            padding: 20px;
            border-radius: 10px;
            height: 100%; 
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-label {
            color: white;
        }
        .table-custom {
            background-color: #000080;
            color: white;
        }
        .btn-primary-custom {
            background-color: #000080;
            border: none;
        }
        .btn-primary-custom:hover {
            background-color: #00004d;
        }
        .btn-danger-custom {
            background-color: #FF4500;
            border: none;
        }
        .btn-danger-custom:hover {
            background-color: #CC3700;
        }
        .btn-update-custom {
            background-color: #32CD32;
            border: none;
        }
        .btn-update-custom:hover {
            background-color: #228B22;
        }
    </style>
</head>
<body>
    <div class="container-fluid container-custom">
        <div class="row w-100">
            <div class="col-md-4">
                <form>
                    <div class="mb-2">
                        <label for="idPedidos" class="form-label">ID Pedidos:</label>
                        <input type="text" class="form-control" id="idPedidos">
                    </div>
                    <div class="mb-2">
                        <label for="idProveedor" class="form-label">ID Proveedor:</label>
                        <input type="text" class="form-control" id="idProveedor">
                    </div>
                    <div class="mb-2">
                        <label for="idProducto" class="form-label">ID Producto:</label>
                        <input type="text" class="form-control" id="idProducto">
                    </div>
                    <div class="mb-2">
                        <label for="idCliente" class="form-label">ID Cliente:</label>
                        <input type="text" class="form-control" id="idCliente">
                    </div>
                    <div class="mb-2">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion">
                    </div>
                    <div class="mb-2">
                        <label for="numeroItems" class="form-label">Número Items:</label>
                        <input type="text" class="form-control" id="numeroItems">
                    </div>
                    <div class="mb-2">
                        <label for="precioTotal" class="form-label">Precio Total:</label>
                        <input type="text" class="form-control" id="precioTotal">
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-primary-custom text-white">Registrar</button>
                        <button type="reset" class="btn btn-secondary">Limpiar</button>
                        <button type="button" class="btn btn-danger-custom text-white">Eliminar</button>
                        <button type="button" class="btn btn-update-custom text-white">Actualizar</button> 
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table table-custom table-bordered">
                    <thead>
                        <tr>
                            <th>ID Pedidos</th>
                            <th>ID Proveedor</th>
                            <th>ID Producto</th>
                            <th>ID Cliente</th>
                            <th>Descripción</th>
                            <th>Número Items</th>
                            <th>Precio Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>