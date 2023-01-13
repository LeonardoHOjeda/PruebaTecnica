# PruebaTecnica

Este código está leyendo un archivo de texto llamado "user-story-one.txt" y utilizando una estructura de control de bucle "do-while" para recorrer cada línea del archivo. El objetivo es extraer dígitos de los números de serie en el archivo y compararlos con un conjunto de números predefinidos en un archivo llamado "numbers.php".

Para extraer los dígitos, el código utiliza dos bucles anidados: uno para recorrer las filas del archivo y otro para recorrer las columnas de cada fila. Cada caracter en cada columna es convertido en un arreglo de caracteres y se compara con un valor predefinido. Si el caracter existe, se agrega al arreglo de dígitos.

Una vez que los dígitos han sido extraídos, el código utiliza una estructura de control "switch" para comparar cada dígito con un conjunto de números predefinidos. Si el dígito coincide con un número predefinido, se agrega el número correspondiente a una variable de cuenta de números. Si no hay coincidencia, se agrega un caracter de "?" a la variable de cuenta de números.

Una vez que todos los dígitos han sido comparados y agregados a la variable de cuenta de números, el código calcula la suma de verificación utilizando un bucle y una fórmula específica. El resultado se verifica para verificar si es válido o no. Si la cuenta de números contiene un "?", se imprime "ILL", si la cuenta de números es válida según la fórmula, se imprime "OK", en caso de que la cuenta de números no sea válida según la fórmula, se imprime "ERR".