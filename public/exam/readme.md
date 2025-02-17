# EXAMEN 2ª EVALUACIÓN. GUERRERA VS MAGA
![Examen 2ª evaluación](/maga.png)
## Explicación
- Vamos a programar un juego por turnos. En el juego participan dos jugadoras: una maga y una guerrera. Por turnos van a lanzarse ataques y se restarán vida hasta que una muera y la otra gane el combate.
- Ambas tienen nombre, vida y ataque.
- Ambas pueden atacar, recibir daño y consultar si está viva.
    - Atacar: Se le pasará por parámetro el objeto (guerrera o maga) al que va a atacar y le restará vida entre 0 y el ataque que tenga.
    - Recibir daño: Se le pasará por parámetro el número de daño que se le inflige y se le restará de su vida. Si resultara una vida < 0, se pondrá a 0.
    - Está viva: Devolverá un booleano indicando true si está viva y false si no lo está.
- La maga comenzará con 120 de vida y ataque de 15.
- La guerrera comenzará con 100 de vida y ataque de 20.

## Dinámica
En el juego se irán atacando alternativamente y **de manera automática** hasta que una de las dos muera. Este ataque se hará lanzando un dado de 15 caras para la maga y 20 para la guerrera.

## Resolución técnica
- Realiza las clases adecuadas. Recuerda herencia, getters y setters, constructores, etc.
- Realiza un index donde pruebes el funcionamiento. Crea una guerrera y una maga y enfréntalas hasta que una de las dos muera.
- Por pantalla deberá de salir el resultado de cada tirada que van realizando y la vida que les quedan. Cuando una de las dos muera, muestra quién ha ganado la partida. La salida será algo así:
![Salida por pantalla](/ejemplo.png)

### Gallifante extra (solo se programa en las clases, no se prueba en el index)
- Realiza un extra para cada personaje:
    - La maga podrá lanzar un ataque especial, el cual dañará a su oponente en el doble de lo que le salga en los dados, pero a su vez le debilitará en 5 unidades (le quitará 5 de vida).
    - La guerrera podrá lanzar un ataque especial, el cual dañará a su oponente 8 unidades más de lo que le salga en los dados, pero a su vez le debilitará en 4 unidades (le quitará 4 de vida).