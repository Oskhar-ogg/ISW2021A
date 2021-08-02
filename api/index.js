usuario = "19520781-k";
password = "123456";
// HTTP CODES
// https://developer.mozilla.org/es/docs/Web/HTTP/Status
///urls
//GET-Todos los usuarios
// `https://api-isw.herokuapp.com/api/login/usuario`
// GET- un usuario
// `https://api-isw.herokuapp.com/api/login/usuario/${usuario}`
//POST-un  usuarios con password
// `https://api-isw.herokuapp.com/api/login/usuario/pass/${usuario}`

let dato = {
    password,
};

let consultaUno = async () => {
    let response = await fetch(`https://api-isw.herokuapp.com/api/login/usuario`);

    let data = response;
    let contenido = await response.json();
    return {
        status: data.status,
        ok: contenido.ok,
        mensaje: contenido.message,
        usuarios: contenido.usuarios,
    };
};

// consultaUno()
//     .then((users) => {
//         console.log(users);
//     })
//     .catch((e) => {
//         console.log(e);
//         console.log("Error");
//     });

let consultaDos = async (usuario) => {
    let response = await fetch(`https://api-isw.herokuapp.com/api/login/usuario/${usuario}`);
    let data = response;
    let contenido = await response.json();
    return {
        status: data.status,
        ok: contenido.ok,
        mensaje: contenido.message,
        usuarios: contenido.respuesta,
    };
};
// consultaDos(usuario)
//     .then((user) => {
//         console.log(user.usuarios);
//         let usuario = user.usuarios;
//         console.log(usuario.usuario);
//         console.log(usuario.rut);
//         console.log(usuario.rol);
//     })
//     .catch((e) => {
//         console.log(e);
//         console.log("Error");
//     });

let consultaTres = async () => {
    let response = await fetch(
        `https://api-isw.herokuapp.com/api/login/usuario/pass/${usuario}`,

        {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(dato),
        }
    );
    let data = response;
    let contenido = await response.json();
    return {
        status: data.status,
        ok: contenido.ok,
        mensaje: contenido.message,
        usuarios: contenido.respuesta,
    };
};
consultaTres()
    .then((users) => {
        if (users.status != 200) {
            alert(`Mensaje: ${users.mensaje}`);
        } else {
            console.log(users);
        }
    })
    .catch((e) => {
        console.log(e);
        console.log("Error");
    });
