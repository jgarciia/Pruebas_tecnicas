let counter = () => {
    /*
    obtener el texto que se introdujo en el input
    utilicé .toLowerCase() para pasarlo a minusculas y que las palabras "Word" y "word" se detecten como la misma palabra
    utilicé .replace() para asegurarme de que el string solo quedara con letras o numeros, eliminando los simbolos
    utilicé .split() para insertar cada palabra del string resultante en un array
    */
    const text = document.getElementById("insertText").value.toLowerCase().replace(/[^a-zA-Z0-9 ]/g, "").split(" ")
    const result = {}
    let columns = 0
    let content = ""

    /*
    recorrer cada uno de los elementos de 'text' con un bucle forEach para verificar si el elemento ya existe en 'result'
    el objeto result tiene como llave el "elemento" y como valor la "cantidad de veces que se repite la palabra"
    si el elemento ya existe en 'result' significa que ya se encontro antes y se aumenta su valor en 1
    si el elemento no existe en result, se crea con un valor inicial de 1 
    */
    text.forEach((element) => {
        result[element] = (result[element] == undefined)? 1 : result[element] + 1
    });

    /*
    ya lo que queda es mostrar el resultado en el HTML
    despues de cada 3 <td> se crea un nuevo <tr> para pasar a la otra linea de la tabla
    y por ultimo se inserta tl html guardado en la variable content y se inserta en el la tag con la id result en el html
    */
    for (element in result) {
        content += (columns%3 === 0)? "<tr>" : "";
        if (element != " " && element != "") {
            content += `<td>${element} = <span>${result[element]}</span></td>`
            columns++
        }
    }
    document.getElementById("table").style.visibility = "visible"
    document.getElementById("result").innerHTML = content
}
