# language: es
# Source: http://github.com/aslakhellesoy/cucumber/blob/master/examples/i18n/es/features/adicion.feature
# Updated: Tue May 25 15:51:46 +0200 2010
Característica: Manejar Ingresos data via the RESTful API
                Con el fin de ofrecer el recurso del usuario a través de una API hipermedia
                Como desarrollador de software de cliente
                Tengo que ser capaz de recuperar y actualizar JSON codificado recursos de los ingresos


    Antecedentes:
        Dado estos Usuarios con los siguientes detalles:
            | id | username | email              | password |
            | 1  | arxis    | renearias@arxis.la | arxisla  |
            | 2  | john     | john@test.org      | johnpass |
        Dado estas formas de pago con los siguientes detalles:
            | id | formapago | descripcion                  |
            | 1 | EFECTIVO   | Pago al instante en Efectivo |
        Y estos ingresos con los siguientes detalles:
            | id | descripcion     | monto  | referencia | formapago    |
            | 1  | descripcion1    | 50.23  | arxisla    | 1            |
            | 2  | descripcion2    | 24.58  | johnpass   | 1            | 
            | 3  | descripcion3    | 210    | johnpass   | 1            |  
        Y me logueare con el siguiente username: "arxis", y contraseña: "arxisla"
        Y cuando consuma el punto final yo usare "Content-type" de "application/json"
    @ingreso
    Escenario: Usuario OBTIENE una Collection de Ingresos objects
        Cuando Yo envio una solicitud "GET" a "/api/ingresos"
        Entonces el codigo de respuesta debe de ser 200
    #Escenario: User can GET their personal data by their unique ID
    #    Cuando Yo envio una solicitud "GET" a "/ingresos/1"
    #    Entonces el codigo de respuesta debe de ser 200
    #    Y la cabecera de respuesta "Content-Type" debe ser igual a "application/json; charset=UTF-8"
    #    Y la respuesta debe contener un json:
    #    """
    #    {
    #        "id":1,
    #         "username":"arxis",
    #         "email":"renearias@arxis.la",
    #         "picture":"uploads\/documents\/images\/profile\/male.png",
    #         "name":""
    #    }
    #    """    
     