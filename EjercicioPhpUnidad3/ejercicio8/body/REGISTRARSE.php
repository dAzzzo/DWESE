<!DOCTYPE html>
<html>

<head>
    <title>REGISTRASE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">


            <div class="col-12">
                <label for="address2" class="form-label">Nombre <span
                        class="text-body-secondary">(Optional)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="Escriba algo...">
            </div>

            <div class="col-12">
                <label for="address2" class="form-label">Apellido <span
                        class="text-body-secondary">(Optional)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="Escriba algo...">
            </div>

            <div class="col-md-5">
                <label for="country" class="form-label">Pais</label>
                <select class="form-select" id="country" required>
                    <option value="">Choose...</option>
                    <option>USA</option>
                    <option>España</option>
                    <option>Italia</option>
                </select>
            </div>


            <div class="col-md-3">
                <label for="Id" class="form-label">Id</label>
                <input type="text" class="form-control" id="Id" placeholder="Escriba el id" required>
            </div>
        </div>

    </div>

</body>

</html>