let counter = () => {
    /*
    obtener el texto que se ingreso en el input
    utilicé .replace() para remover todo lo que fuera diferente a los simbolos "[](){}"
    utilicé .split() para convertirlo en un array y poder utilizar .splice() para eliminar lo que esten cerrados correctamente
    */
    const text = document.getElementById("insertText").value.replace(/[^[(){}\]]/g, "").split("")
    if (text.length > 0) {
        let index = 0
        let notClosed = ""

        /*
        El bucle while se encarga de eliminar cada uno de los simbolos que esten bien cerrados por medio de .splice()
        cada vez que se elimina un simbolo con su pareja '{' y '}' se repite desde 0 el bucle
        el proceso se repite hasta que se hayan eliminado todos los elementos de 'text'      
        */
        while (index < text.length) {
            if ((text[index]=='(' && text[index+1]==')') || (text[index]=='{' && text[index+1]=='}') || (text[index]=='[' && text[index+1]==']')) {
                text.splice(index, 2)
                index = 0
            } else {
                (index == 1)? notClosed = text[index]:""; 
                index+=1
            }
        }

        /*
        si 'text' esta vacio significa que todos los simbolos fueron cerrados
        en caso de que tenga almenos un elemento significa que hay uno que falto por cerrar
        para mostrar el mensaje de si esta bien o mal utilicé Sweet alert https://sweetalert2.github.io/
        */
        (text.length == 0)? Swal.fire('Correct','All the simbols were closed','success') : Swal.fire('Incorrect!', `one of the "${notClosed}" wasn't closed correctly`,'error');
    } else {
        Swal.fire('',"the string doesn't have any symbol",'warning')
    }
}