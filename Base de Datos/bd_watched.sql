-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-05-2018 a las 15:55:33
-- Versión del servidor: 5.7.21-0ubuntu0.16.04.1
-- Versión de PHP: 7.2.2-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_watched`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actores_actrices`
--

CREATE TABLE `actores_actrices` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actores_actrices`
--

INSERT INTO `actores_actrices` (`id`, `nombre`, `edad`) VALUES
(1, 'Brad Pitt', 54),
(2, 'Jeffrey Dean Morgan', 52),
(3, 'Patrick Wilson', 44),
(4, 'Malin Åkerman', 39),
(5, 'Gerard Butler', 48),
(6, 'Lena Headey', 44),
(7, 'Viggo Mortensen', 59),
(8, 'Ian McKellen', 78),
(9, 'Orlando Bloom', 41),
(10, 'Elijah Wood', 37),
(11, 'Kate Hudson', 39),
(12, 'Hugh Jackman', 49),
(13, 'Kate Beckinsale', 44),
(14, 'Gal Gadot', 33),
(15, 'Chris Pine', 37),
(16, 'Finn Wolfhard', 15),
(17, 'Bill Skarsgård', 27),
(18, 'Ryan Reynolds', 41),
(19, 'Morena Baccarin', 38),
(20, 'Robert Downey Jr.', 53),
(21, 'Gwyneth Paltrow', 45),
(22, 'Julia Roberts', 50),
(23, 'Owen Wilson', 49),
(24, 'James Franco', 40),
(25, 'Dave Franco', 32),
(26, 'Ewan McGregor', 47),
(27, 'Halle Berry', 51),
(28, 'Mike Myers', 54),
(29, 'Cameron Diaz', 45),
(30, 'Salma Hayek', 51),
(31, 'Antonio Banderas', 57),
(32, 'Dwayne Johnson', 45),
(33, 'Auli\'i Cravalho', 17),
(34, 'Robin Williams', 63),
(35, 'Dustin Hoffman', 80),
(36, 'Verna Felton', 76),
(37, 'Cliff Edwards', 76),
(38, 'Tom Hanks', 61),
(39, 'Tim Allen', 64),
(40, 'Steve Martin', 72),
(41, 'Itzhak Perlman', 72),
(42, 'Tom Hiddleston', 37),
(43, 'Tilda Swinton', 57),
(44, 'Joseph Gordon-Levitt', 37),
(45, 'Emma Thompson', 59),
(46, 'Joaquin Phoenix', 43),
(47, 'Jason Raize', 28),
(48, 'Jemaine Clement', 44),
(49, 'Taika Waititi', 42),
(50, 'Anjelica Huston', 66),
(51, 'Raúl Juliá', 54),
(52, 'Bobby Driscoll', 31),
(53, 'Kathryn Beaumont', 79),
(54, 'Maria Ehrich', 25),
(55, 'Jannis Niewöhner', 26),
(56, 'Bob Geldof', 66),
(57, 'Jenny Wright', 56),
(58, 'Marlon Wayans', 45),
(59, 'Shawn Wayans', 47),
(60, 'Ashton Kutcher', 40),
(61, 'Seann William Scott', 41),
(62, 'Kal Penn', 41),
(63, 'John Cho', 45),
(64, 'Terry Jones', 76),
(65, 'Terry Jones', 78),
(66, 'Eddie Redmayne', 36),
(67, 'Felicity Jones', 34),
(68, 'Dickie Jones', 87),
(69, 'Cliff Edwards', 76),
(70, 'Eleanor Audley', 86),
(71, 'Verna Felton', 76),
(72, 'Russi Taylor', 73),
(73, 'Taylor Lautner', 26),
(74, 'Taylor Dooley', 25),
(75, 'Alexa Vega', 29),
(76, 'Daryl Sabara', 25),
(77, 'Jessalyn Gilsig', 46),
(78, 'Andrea Corr', 43),
(79, 'John Cleese', 78),
(80, 'Jack Palance', 87),
(81, 'Chris Sarandon', 75),
(82, 'William Hickey', 69),
(83, 'Winona Ryder', 46),
(84, 'Michael Keaton', 66),
(85, 'Charlie Tahan', 19),
(86, 'Catherine O\'Hara', 64),
(87, 'Masami Nagasawa', 30),
(88, 'Ryūnosuke Kamiki', 24),
(89, 'Emily Watson', 51),
(90, 'Tracey Ullman', 58),
(91, 'Riisa Naka', 28),
(92, 'James Marsden', 44),
(93, 'Michelle Monaghan', 42),
(94, 'Ryan Gosling', 37),
(95, 'Rachel McAdams', 39),
(96, 'Emma Stone', 29),
(97, 'Christian Bale', 44),
(98, 'Michael Caine', 85),
(99, 'Sebastian Cabot', 59),
(100, 'Karl Swenson', 70),
(101, 'Anna Castillo', 24),
(102, 'Macarena García', 30),
(103, 'Christoph Waltz', 61),
(104, 'Leonardo DiCaprio', 43),
(105, 'Kate Winslet', 42),
(106, 'Zoe Saldaña', 39),
(107, 'Sam Worthington', 41),
(108, 'John Travolta', 64),
(109, 'Samuel L. Jackson', 69),
(110, 'Uma Thurman', 48),
(111, 'Lucy Liu', 49),
(112, 'Tommy Wiseau', 62),
(113, 'Greg Sestero', 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `codigo` int(11) NOT NULL,
  `pelicula` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`codigo`, `pelicula`, `usuario`, `valoracion`, `comentario`) VALUES
(1, 1, 'victor', 3, 'Típica película que ves por postureo.'),
(2, 1, 'sara', 4, 'Me ha parecido perfecta.'),
(3, 60, 'andrea', 5, 'Que salvajada.'),
(4, 23, 'sara', 5, 'Dumbo grande'),
(5, 72, 'sara', 3, 'Yo soy más famosa que esta película.'),
(6, 30, 'sara', 5, 'hermano, te amo.'),
(7, 6, 'sara', 5, 'Sangreeeeee'),
(8, 60, 'sara', 5, 'Bestial.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas_peliculas`
--

CREATE TABLE `listas_peliculas` (
  `imagen` text NOT NULL,
  `privacidad` int(11) NOT NULL DEFAULT '0',
  `nombreListas` varchar(535) NOT NULL DEFAULT 'Sin Nombre',
  `nombreCreador` varchar(20) NOT NULL,
  `numeroPeliculas` int(11) NOT NULL,
  `codigoListas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listas_peliculas`
--

INSERT INTO `listas_peliculas` (`imagen`, `privacidad`, `nombreListas`, `nombreCreador`, `numeroPeliculas`, `codigoListas`) VALUES
('marvel.jpg', 0, 'Favoritas', 'sara', 5, 1),
('Luke Simpsons.jpg', 0, 'Disney', 'victor', 1, 3),
('4.jpg', 0, 'Prueba4Pepe', 'pepe', 0, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas_y_peliculas`
--

CREATE TABLE `listas_y_peliculas` (
  `listaPeliculas` int(255) NOT NULL,
  `codigoPelicula` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listas_y_peliculas`
--

INSERT INTO `listas_y_peliculas` (`listaPeliculas`, `codigoPelicula`) VALUES
(3, 76),
(1, 6),
(1, 42),
(1, 60),
(1, 9),
(1, 76);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas_y_usuarios`
--

CREATE TABLE `listas_y_usuarios` (
  `nombreUsu` varchar(20) NOT NULL,
  `listasPelis` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listas_y_usuarios`
--

INSERT INTO `listas_y_usuarios` (`nombreUsu`, `listasPelis`) VALUES
('sara', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `Portada` text NOT NULL,
  `Titulo` varchar(535) NOT NULL DEFAULT 'Sin título',
  `Codigo` int(255) NOT NULL,
  `Genero` text NOT NULL,
  `AnioEstreno` text NOT NULL,
  `Duracion` int(11) NOT NULL,
  `Sinopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`Portada`, `Titulo`, `Codigo`, `Genero`, `AnioEstreno`, `Duracion`, `Sinopsis`) VALUES
('Watchmen.jpg', 'Watchmen', 1, 'Acción', '2009', 162, 'Los \"Minutemen\" son un grupo de hombres y mujeres disfrazados que luchan contra el crimen, grupo formado en 1938 en respuesta a un aumento de las pandillas y delincuentes, también disfrazados, y los \"Watchmen\" se forman similarmente décadas más tarde. Su existencia en los EE.UU. ha afectado dramáticamente los acontecimientos del mundo: los superpoderes del Dr. Manhattan (Billy Crudup) ayudan a Estados Unidos a ganar la Guerra de Vietnam, dando como resultado que el presidente Richard Nixon (Robert Wisden) fuera repetidamente reelecto en los años 80. La existencia del Dr. Manhattan le da al Occidente una ventaja estratégica sobre la Unión Soviética, que en esa década amenaza con escalar la guerra fría a una guerra nuclear. Durante ese tiempo, el creciente sentimiento antivigilante en el país orilla a luchadores contra el crimen enmascarado a estar fuera de la ley. Aunque muchos de los héroes están retirados, el Doctor Manhattan y El Comediante (Jeffrey Dean Morgan) operan como agentes sancionados por el gobierno, y Rorschach (Jackie Earle Haley) sigue operando fuera de la ley.\r\n\r\nInvestigando el asesinato del agente del gobierno Edward Blake, Rorschach descubre que Blake era el Comediante, y elabora la teoría de que alguien pudiera estar tratando de eliminar a los vigilantes. Intenta convencer a sus compañeros jubilados - su ex compañero Daniel Dreiberg/Buho Nocturno II (Patrick Wilson), el Dr. Manhattan, y su última amante, Laurie Jupiter/Espectro de Seda II (Malin Åkerman). Dreiberg es escéptico, aun así comenta su hipótesis al Vigilante convertido en multimillonario Adrian Veidt /Ozimandias (Matthew Goode).'),
('Comunidad del Anillo.jpg', 'El Señor de los Anillos: la Comunidad del Anillo', 2, 'Aventuras.', '2001', 178, 'En la Tierra Media, el Señor Oscuro Saurón ordenó a los Elfos que forjaran los Grandes Anillos de Poder. Tres para los reyes Elfos, siete para los Señores Enanos, y nueve para los Hombres Mortales. Pero Saurón también forjó, en secreto, el Anillo Único, que tiene el poder de esclavizar toda la Tierra Media. Con la ayuda de sus amigos y de valientes aliados, el joven hobbit Frodo emprende un peligroso viaje con la misión de destruir el Anillo Único. Pero el malvado Sauron ordena la persecución del grupo, compuesto por Frodo y sus leales amigos hobbits, un mago, un hombre, un elfo y un enano. La misión es casi suicida pero necesaria, pues si Sauron con su ejército de orcos lograra recuperar el Anillo, sería el final de la Tierra Media.'),
('Las dos torres.jpg', 'El Señor de los Anillos: las Dos Torres', 3, 'Aventuras.', '2002', 179, 'Tras la disolución de la Compañía del Anillo, Frodo y su fiel amigo Sam se dirigen hacia Mordor para destruir el Anillo Único y acabar con el poder de Sauron, pero les sigue un siniestro personaje llamado Gollum. Mientras, y tras la dura batalla contra los orcos donde cayó Boromir, el hombre Aragorn, el elfo Legolas y el enano Gimli intentan rescatar a los medianos Merry y Pipin, secuestrados por los orcos de Mordor. Por su parte, Saurón y el traidor Sarumán continúan con sus planes en Mordor, a la espera de la guerra contra las razas libres de la Tierra Media. '),
('elretornodelrey.jpg', 'El Señor de los Anillos: el Retorno del Rey', 4, 'Aventuras.', '2003', 200, 'Las fuerzas de Saruman han sido destruidas, y su fortaleza sitiada. Ha llegado el momento de decidir el destino de la Tierra Media, y, por primera vez, parece que hay una pequeña esperanza. El interés del señor oscuro Sauron se centra ahora en Gondor, el último reducto de los hombres, cuyo trono será reclamado por Aragorn. Sauron se dispone a lanzar un ataque decisivo contra Gondor. Mientras tanto, Frodo y Sam continuan su camino hacia Mordor, con la esperanza de llegar al Monte del Destino.'),
('Van Helsing.jpg', 'Van Helsing', 5, 'Aventuras.', '2004', 136, 'Siglo XIX. En los Cárpatos está la misteriosa y mítica región de Transilvania, donde habita el Mal que se hace presente cuando el sol se pone, y donde toman forma los monstruos que protagonizan las pesadillas de los hombres. Enviado por el Vaticano, Van Helsing inicia allí su lucha contra el conde Drácula y las criaturas bajo su control.'),
('300.jpg', '300', 6, 'Acción.', '2006', 117, 'Adaptación del cómic de Frank Miller (autor del cómic \'Sin City\') sobre la famosa batalla de las Termópilas (480 a.C.). El objetivo de Jerjes, emperador de Persia, era la conquista de Grecia, lo que desencadenó las Guerras Médicas. Dada la gravedad de la situación, el rey Leónidas de Esparta (Gerard Butler) y 300 espartanos se enfrentaron a un ejército persa que era inmensamente superior.'),
('Wonder Woman.jpg', 'Wonder Woman', 7, 'Acción.', '2017', 141, 'Antes de ser Wonder Woman (Gal Gadot) era Diana, princesa de las Amazonas, entrenada para ser una guerrera invencible. Diana fue criada en una isla paradisíaca protegida. Hasta que un día un piloto norteamericano (Chris Pine), que tiene un accidente y acaba en sus costas, le habla de un gran conflicto existente en el mundo [Primera Guerra Mundial]. Diana decide salir de la isla convencida de que puede detener la terrible amenaza. Mientras lucha junto a los hombres en la guerra que acabará con todas las guerras, Diana descubre todos sus poderes y su verdadero destino.'),
('It.jpg', 'It (2017)', 8, 'Terror.', '2017', 135, 'Cuando empiezan a desparecer niños en el pueblo de Derry (Maine), un pandilla de amigos lidia con sus mayores miedos al enfrentarse a un malvado payaso llamado Pennywise, cuya historia de asesinatos y violencia data de siglos. Adaptación cinematográfica de la conocida novela de Stephen King \"It\". (FILMAFFINITY)'),
('Deadpool.jpg', 'Deadpool', 9, 'Acción.', '2016', 109, 'Basado en el anti-héroe menos convencional de la Marvel, Deadpool narra el origen de un ex-operativo de la fuerzas especiales llamado Wade Wilson, reconvertido a mercenario, y que tras ser sometido a un cruel experimento adquiere poderes de curación rápida, adoptando Wade entonces el alter ego de Deadpool. Armado con sus nuevas habilidades y un oscuro y retorcido sentido del humor, Deadpool intentará dar caza al hombre que casi destruye su vida.'),
('Iron Man.jpg', 'Iron Man', 10, 'Acción.', '2008', 126, 'El multimillonario fabricante de armas Tony Stark (Robert Downey Jr.) debe enfrentarse a su turbio pasado después de sufrir un accidente con una de sus armas. Equipado con una armadura de última generación tecnológica, se convierte en \"El hombre de hierro\", un héroe que se dedica a combatir el mal en todo el mundo.'),
('Iron Man 2.jpg', 'Iron Man 2', 11, 'Acción.', '2010', 124, 'El mundo ya sabe que el multimillonario Tony Stark (Robert Downey Jr.) es Iron Man, el superhéroe enmascarado. A pesar de las presiones del gobierno, la prensa y la opinión pública para que comparta su tecnología con el ejército, Tony es reacio a desvelar los secretos de la armadura de Iron Man, porque teme que esa información caiga en en manos de irresponsables. Con Pepper Potts (Gwyneth Paltrow) y James “Rhodey” Rhodes (Don Cheadle) a su lado, Tony forja alianzas nuevas y se enfrenta a nuevas y poderosas fuerzas.'),
('Iron Man 3.jpg', 'Iron Man 3', 12, 'Acción.', '2013', 130, 'El descarado y brillante empresario Tony Stark/Iron Man se enfrentará a un enemigo cuyo poder no conoce límites. Cuando Stark comprende que su enemigo ha destruido su universo personal, se embarca en una angustiosa búsqueda para encontrar a los responsables. Este viaje pondrá a prueba su entereza una y otra vez. Acorralado, Stark tendrá que sobrevivir por sus propios medios, confiando en su ingenio y su instinto para proteger a las personas que quiere.'),
('Wonder.jpg', 'Wonder', 13, 'Drama.', '2017', 113, 'Un niño de 10 años (Jacob Tremblay, conocido por \'La habitación\') nacido con una deformidad facial que le ha obligado a ser operado 27 veces de cirugía, se esfuerza por encajar en su nuevo colegio.'),
('The Disaster Artist.jpg', 'The Disaster Artist', 14, 'Comedia.', '2017', 105, 'Narra la historia real de la producción de la película \'The Room\', que ha sido considerada como “una de las peores películas de la historia\". Dirigida en 2003 por Tommy Wiseau, \'The Room\' se ha estado proyectando en salas -completamente llenas- por toda Norteamérica desde hace más de una década. \'The Disaster Artist\' es una comedia sobre dos inadaptados en busca de un sueño. Cuando el mundo los rechaza, deciden hacer su propia película, un film maravillosamente espantoso gracias a sus momentos involuntariamente cómicos, sus tramas dispersas y sus terribles interpretaciones.'),
('Robots.jpg', 'Robots', 15, 'Animación.', '2005', 91, 'Rodney Hojalata es un joven y genial inventor que sueña con hacer del mundo un lugar mejor. Cappy es una atractiva ejecutiva robot de la que Rodney se queda prendado al instante. Ratchet es el tirano corporativo; y luego está el Gran Soldador, un magistral inventor que ha perdido el norte … hasta que tropieza con el irreprimible soñador de Rodney. Además está un grupo de robots inadaptados conocidos como los Oxidados liderados por Manivela.'),
('Shrek.jpg', 'Shrek', 16, 'Animación.', '2001', 92, 'Hace mucho tiempo, en una lejanísima ciénaga, vivía un feroz ogro llamado Shrek. De repente, un día, su soledad se ve interrumpida por una invasión de sorprendentes personajes. Hay ratoncitos ciegos en su comida, un enorme y malísimo lobo en su cama, tres cerditos sin hogar y otros seres que han sido deportados de su tierra por el malvado Lord Farquaad. Para salvar su territorio, Shrek hace un pacto con Farquaad y emprende viaje para conseguir que la bella princesa Fiona acceda a ser la novia del Lord. En tan importante misión le acompaña un divertido burro, dispuesto a hacer cualquier cosa por Shrek: todo, menos guardar silencio.'),
('Shrek 2.jpg', 'Shrek 2', 17, 'Animación.', '2004', 93, 'Cuando Shrek y la princesa Fiona regresan de su luna de miel, los padres de ella los invitan a visitar el reino de Muy Muy Lejano para celebrar la boda. Para Shrek, al que nunca abandona su fiel amigo Asno, esto constituye un gran problema. Los padres de Fiona, por su parte, no esperaban que su yerno tuviera un aspecto semejante y, mucho menos, que su hija hubiera cambiado tanto. Todo esto trastoca los planes del rey respecto al futuro del reino. Pero entonces entran en escena la maquiavélica Hada Madrina, su arrogante hijo el Príncipe Encantador y un minino muy especial: el Gato con Botas, experto cazador de ogros.'),
('Shrek 3.jpg', 'Shrek tercero', 18, 'Animación', '2007', 93, 'Cuando Shrek se casó con Fiona, no cayó en la cuenta de que tarde o temprano acabaría siendo rey. Así, al caer enfermo su suegro, el Rey Harold, Shrek corre el peligro de tener que abandonar su amado pantano para ocupar el trono; a menos que encuentre un heredero. Decide entonces emprender un viaje con Asno y el Gato con Botas para encontrar a Arturo, el primo de Fiona. Mientras, en Muy Muy Lejano, el Principe Encantador recluta un ejército de villanos para tomar el trono por la fuerza. Pero no cuentan con que Fiona y la Reina Lillian también han reunido su grupo de heroínas para hacerles frente.'),
('Shrek 4.jpg', 'Shrek 4: Felices para siempre', 19, 'Animación', '2010', 93, 'En lugar de dedicarse a espantar a los aldeanos como solía hacer, el ogro Shrek accede a autografiar horquillas para siembra, pero es embaucado al firmar un pacto con el afable negociador Rumpelstiltskin. De pronto Shrek se encuentra en una retorcida versión alternativa de Muy Muy Lejano, en la que Fiona, que es un ogro de caza, no lo conoce, y otro tanto sucede con Burro; Rumpelstiltskin es el rey, y el Gato con Botas es obeso y perezoso. De Shrek depende salvar a sus amigos, restaurar su mundo y recuperar a su único y verdadero amor. Cuarta entrega (y última) de las aventuras del ogro verde de Dreamworks.'),
('El gato con Botas.jpg', 'El gato con botas', 20, 'Animación.', '2011', 90, 'Spin-off de la saga Shrek, \"El gato con botas\" se sitúa en el tiempo como la precuela de Shrek 2. Mucho tiempo antes de conocer a Shrek, el Gato con Botas emprendió un viaje aliándose con el ingenioso Humpty Dumpty y con la avispada Kitty Softpaws para robar el famoso ganso de los huevos de oro.'),
('Vaiana.jpg', 'Vaiana', 21, 'Animación.', '2016', 107, 'La historia se desarrolla hace dos milenios en unas islas del sur del Pacífico. La protagonista es Vaiana Waialiki, una joven que desea explorar el mundo navegando por el océano. Ella es la única hija de un importante capitán que pertenece a una familia con varias generaciones de marinos.'),
('Hook.jpg', 'Hook (El capitán Garfio)', 22, 'Fantasía.', '1992', 145, 'Peter Pan (Robin Williams) es un prestigioso abogado que vive absorto en su trabajo. Tiene una encantadora familia a la que apenas dedica tiempo, porque se ha olvidado de lo que significa la infancia. Sin embargo, cuando sus hijos son secuestrados por su antiguo enemigo, el Capitán Garfio (Dustin Hoffman), y llevados al País de Nunca Jamás, se verá obligado a viajar a ese reino encantado, donde, con la ayuda de Campanilla (Julia Roberts), podrá recuperar no sólo a sus hijos, sino también al niño que un día fue.'),
('Dumbo.jpg', 'Dumbo', 23, 'Animación.', '1941', 64, 'Las cigüeñas llegan, como todos los años, hasta un pintoresco circo para repartir los bebés a sus respectivas mamás. La señora Dumbo, una elefanta, descubre que su bebé tiene unas orejas enormes; todas sus compañeras se ríen de él, pero la señora Dumbo lo defiende siempre, hasta el punto de ser encerrada por enfrentarse a todo aquel que se mofe de su retoño. El pequeño Dumbo, maltratado y ridiculizado por todos sus compañeros, sólo cuenta con la ayuda de un minúsculo ratoncito llamado Timothy, que decide hacer de él una estrella del circo.'),
('Toy Story.jpg', 'Toy Story', 24, 'Animación.', '1995', 82, 'Los juguetes de Andy, un niño de 6 años, temen que haya llegado su hora y que un nuevo regalo de cumpleaños les sustituya en el corazón de su dueño. Woody, un vaquero que ha sido hasta ahora el juguete favorito de Andy, trata de tranquilizarlos hasta que aparece Buzz Lightyear, un héroe espacial dotado de todo tipo de avances tecnológicos. Woody es relegado a un segundo plano. Su constante rivalidad se transformará en una gran amistad cuando ambos se pierden en la ciudad sin saber cómo volver a casa.'),
('Toy Story 2.jpg', 'Toy Story 2', 25, 'Animación.', '1999', 92, 'Cuando Andy se va de campamento dejando solos a los juguetes, Al McWhiggin, un compulsivo coleccionista de juguetes valiosos, secuestra a Woody. Buzz Lightyear y los demás juguetes tendrán que actuar con rapidez si quieren rescatarlo. Durante la operación de rescate no sólo tendrán que afrontar múltiples peligros, sino que también vivirán divertidas situaciones.'),
('Toy Story 3.jpg', 'Toy Story 3', 26, 'Animación.', '2010', 103, 'Cuando su dueño Andy se prepara para ir a la universidad, el vaquero Woody, el astronauta Buzz y el resto de sus amigos juguetes comienzan a preocuparse por su incierto futuro. Efectivamente todos acaban en una guardería, donde por ejemplo la muñeca Barbie conocerá al guapo Ken. Esta reunión de nuestros amigos con otros nuevos juguetes no será sino el principio de una serie de trepidantes y divertidas aventuras.'),
('Fantasia 2000.jpg', 'Fantasía 2000', 27, 'Animación.', '1999', 75, 'Al igual que su precedente, ésta película se divide en varios fragmentos -en este caso ocho- cada uno acompañado de distintas piezas musicales. Entre ellos se incluye El aprendiz de brujo, protagonizado por Mickey Mouse, que ya aparecía en la primera Fantasía.'),
('Solo los amantes sobreviven.jpg', 'Sólo los amantes sobreviven', 28, 'Drama.', '2013', 123, 'Ambientada en unas Detroit y Tánger románticamente desoladas, Adam, un músico underground profundamente deprimido por la dirección que han tomado los actos de la humanidad, se reúne con su dura y enigmática amante, Eve, quien no tiene problemas en reconocer su condición de vampiro. Su historia de amor ha prevalecido durante varios siglos, pero su libertino idilio pronto es interrumpido por la llegada de Ava, la salvaje e incontrolable hermana menor de aquella. A medida que su mundo se desmorona a su alrededor, ¿podrán estas astutas pero frágiles criaturas de la noche seguir existiendo antes de que sea demasiado tarde?'),
('El planeta del Tesoro.jpg', 'El Planeta del Tesoro', 29, 'Animación.', '2002', 95, 'Jim, popular surfista solar, se enfrenta a una cacería intergaláctica de tesoros. En sus manos cae un legendario mapa que le llevará a buscar la fortuna más grande del Universo. A bordo de un \"galeón solar\", Jim es el ayudante del cocinero del barco, John Silver (mitad hombre mitad máquina), que le enseña cómo ser un buen explorador del espacio. Jim conoce a un simpático robot llamado BEN (Bio Electro Navegador). Juntos, bajo el mando de la inteligente Capitán Amelia, descubrirán un tesoro inimaginable. Adaptación de la Disney del clásico de Robert Louis Stevenson \"La isla del tesoro\".'),
('Hermano Oso.jpg', 'Hermano Oso', 30, 'Animación.', '2003', 85, 'En los bosques del noroeste americano vive un niño indio llamado Kenai, cuya vida sufre un giro inesperado cuando los Grandes Espíritus lo transforman en un oso, el animal que más odia. Kenai se hace amigo de un osezno llamado Koda y se propone recuperar su forma humana. Mientras, su hermano (que no sabe que Kenai es ahora un oso) lo persigue para cumplir una misión de venganza en la que está en juego el honor familiar.'),
('Lo que hacemos en las Sombras.jpg', 'Lo que hacemos en las sombras', 31, 'Comedia.', '2015', 86, 'Viago, Deacon y Vladislav son tres vampiros que comparten piso en Nueva Zelanda. Hacen lo posible por adaptarse a la sociedad moderna: pagan el alquiler, se reparten las tareas domésticas e intentan que les inviten a entrar en los clubs. Una vida normal, salvo por una pequeña diferencia: son inmortales y tienen que alimentarse de sangre humana. Cuando su compañero del sótano, Petyr, convierte en vampiro a Nick, nuestros protagonistas deberán enseñarle como funciona todo en su recién estrenada vida eterna.'),
('Familia Addams.jpg', 'La Familia Addams', 32, 'Comedia.', '1991', 100, 'El delirante y gótico estilo de vida de la peculiar familia Addams se ve amenazado peligrosamente cuando el codicioso dúo que forman madre e hijo, con la ayuda de un abogado sin ningún escrúpulos, conspiran para hacerse con la fortuna familiar.'),
('La Familia Addams.jpg', 'La familia Addams 2: la tradición continúa', 33, 'Comedia.', '1993', 94, 'Fue amor al primer susto cuando Gomez y Morticia acogieron a un nuevo miembro en el grupo familiar, Pubert, su delicado, blandito y bigotudo niño. Fue entonces cuando Fétido se enamoró de la voluptuosa niñera. Pero tras algunas investigaciones, Miércoles y Pugsley descubren que la “inocente” niñera es en realidad una viuda negra asesina que planea añadir a Fétido a su colección de maridos muertos.'),
('Familia Addams 3.jpg', 'La familia Addams 3: La reunión', 34, 'Comedia.', '1998', 93, 'Los Addams reciben una invitación para asistir a una reunión familiar organizada por unos parientes lejanos. Como es de esperar, Morticia, Gómez y los niños no caben en sí de júbilo y viajan con toda la ilusión del mundo al lugar de la reunión. Pero, cuando lleguen, descubrirán la triste realidad: han sido invitados a la fiesta por culpa de un error informático y sus supuestos parientes resultan ser una familia aburrida y convencional.'),
('Peter Pan.jpg', 'Peter Pan', 35, 'Animación.', '1953', 76, 'Wendy y sus hermanos vivirán fantásticas aventuras cuando Peter Pan, el héroe de sus cuentos, les guía hacia el mágico mundo de Nunca Jamás junto a su inseparable Campanilla. En su viaje a “la segunda estrella a la derecha”, conocerán la guarida secreta de Peter y a los traviesos Niños Perdidos y tendrán que enfrentarse con el famoso Capitán Garfio y sus piratas.'),
('Rubi.jpg', 'Rubí: la última viajera en el tiempo', 36, 'Fantasía.', '2013', 122, 'En casa de Gwendolyn Sheperd nada ni nadie es del todo “normal”, empezando por su excéntrica (¡y cotilla!) tía abuela Maddy, que tiene extrañas visiones, pasando por Lucy, que se escapó de casa hace 17 años sin dejar rastro alguno... Y para acabar, también está Charlotte, su encantadora y (rabiosamente) perfecta prima, quien, según parece, ha heredado un extraño gen familiar que le permitirá viajar en el tiempo. Pero un increíble secreto está a punto de salir a la luz: la portadora del misterioso gen para viajar a través del tiempo no es Charlotte, ¡sino la propia Gwen! Ella es, en realidad, la duodécima (¡y la última!) viajera en el tiempo y se dice que cuando su sangre se una a la de los otros once viajeros, se cerrará el misterioso “Círculo de los doce”. Para obtener más información, Gwen deberá viajar al pasado y por suerte o por desgracia, no lo hará sola: la acompañará el undécimo viajero en el tiempo, el arrogante, atractivo y sarcástico Gideon, con quien va a vivir algo más que una peligrosa carrera a través del tiempo.'),
('Zafiro.jpg', 'La última viajera del tiempo: Zafiro', 37, 'Fantasía.', '2014', 116, 'Secuela de \"Ruby, la última viajera del tiempo\", en la que la viajera en el tiempo Gwen y su novio Gideon son hechos prisioneros por el Conde de St. Germain. '),
('Esmeralda.jpg', 'La última viajera del tiempo: Esmeralda', 38, 'Fantasía.', '2016', 113, 'Tercer largometraje basado en las novelas \"El amor a través del tiempo\" de Kerstin Gier. '),
('The Wall pelicula.jpg', 'Pink Floyd - The Wall', 39, 'Musical.', '1982', 99, 'Pink, el cantante de un grupo musical, arrastra desde su infancia una serie de traumas debido a la dura educación que recibió. Cansado de todo lo que rodea su profesión, se acaba refugiando en las drogas como única opción para romper con el muro que él mismo ha creado a su alrededor.'),
('Dos rubias de pelo en pecho.jpg', 'Dos rubias de pelo en pecho', 40, 'Comedia.', '2004', 115, 'Dos ambiciosos -pero con poca fortuna- agentes del FBI de color (Shawn y Marlon Wayans) se hacen pasar por mujeres, novatas en la alta sociedad, en el exclusivo complejo Hamptons para investigar un círculo de secuestros. Pero mientras preparan su actuación en el mayor acontecimiento social del año se encuentran que irrumpir en la alta sociedad es mucho más duro de lo que parecía. '),
('Colega, donde esta mi coche.jpg', 'Colega, ¿dónde está mi coche?', 41, 'Comedia.', '2000', 83, 'Tras un noche de juerga, dos amigos no recuerdan dónde dejaron aparcado su coche. Su búsqueda significará el comienzo de una serie de sorpresas. Todo empieza cuando los jóvenes Jesse y Chester se despiertan una mañana después de una fiesta muy intensa, pero ninguno de los dos puede recordar qué pasó durante la noche anterior. El coche de Jesse desapareció, y todo parece estar fuera de lugar, así que los dos amigos comienzan la búsqueda del auto y de pistas que les permita reconstruir la noche anterior, aunque a medida que profundizan en los acontecimientos de las últimas veinticuatro horas, la situación se convierte en una salvaje historia que parece extraída de la ciencia-ficción... Una comedia de adolescentes \"descerebrados\" que aprovecha la ola de cine teen para conseguir otro éxito de taquilla americano.'),
('Dos Colgaos muy fumaos.jpg', 'Dos colgaos muy fumaos', 42, 'Comedia.', '2004', 88, 'Harold Lee (John Cho) se encuentra atrapado en un trabajo de bajo nivel en el mundo de las inversiones bancarias, haciendo horas extra y claramente despreciado por sus compañeros, quienes no se molestan en ocultar que le pasan su propio trabajo para que lo termine el fin de semana. Para terminar de complicar las cosas, no se atreve a hablarle a su atractiva vecina (Paula Garcés) cuando se la encuentra en el portal. Mientras que Harold trabaja, su mejor amigo, Kumar Patel (Kal Penn), hace todo lo que puede para evitar enfrentarse al mundo real, manteniendo su modo de vida ocioso y despreocupado, mientras que simula vagos intentos de ser admitido en la facultad de medicina para seguir la tradición familiar. Buscando un descanso de sus realidades, estos dos afables pringados se relajan delante de la televisión para una fumada de viernes noche, que acaba derivando en un increíble caso de “gazuza”. Al ver un anuncio de una hamburguesería, Harold y Kumar descubren la verdadera misión de sus vidas (o al menos, su misión para esta noche de viernes): deben embarcarse en una increíble búsqueda durante toda la noche y a todo lo ancho de New Jersey, de una hamburguesería que satisfaga sus ansias.'),
('Dos Colgaos muy fumaos 2.jpg', 'Dos colgaos muy fumaos: Fuga de Guantánamo', 43, 'Comedia.', '2008', 107, 'Harold (Cho) y Kumar (Penn) viajan a Amsterdam para aprovisionarse de droga. Durante el vuelo, los confunden con dos terroristas islámicos que pretenden secuestrar el avión. Tras arrestarlos, los envian a la prisión de Guantánamo, en Cuba. Allí vivirán situaciones tan desesperadas como surrealistas.'),
('Dos Colgaos muy fumaos 3.jpg', 'Dos colgaos muy fumaos: en Navidad', 44, 'Comedia.', '2011', 115, 'Harold y Kumar son ya unos treintañeros. Harold está casado, ha dejado las drogas, y es un ejecutivo de Wall Street que vive en una preciosa casita. Por su parte, Kumar está soltero, vive en la misma casa de siempre, y acaba de perder su licencia médica por fumar marihuana. Tras mucho tiempo la pareja volverá a reunirse cuando un paquete para Harold llegue a su antiguo apartamento, y Kumar se lo lleve a su nuevo hogar. Una vez allí, Kumar quemará accidentalmente el árbol de Navidad plantado por el suegro de Harold, y los dos deberán ir en busca de un nuevo árbol para reemplazarlo.'),
('La vida de Brian.jpg', 'La vida de Brian', 45, 'Comedia.', '1978', 94, 'Brian nace en un pesebre de Belén el mismo día que Jesucristo. Un cúmulo de desgraciados y tronchantes equívocos le harán llevar una vida paralela a la del verdadero Hijo de Dios. Sus pocas luces y el ambiente de decadencia y caos absoluto en que se haya sumergida la Galilea de aquellos días, le harán vivir en manos de su madre, de una feminista revolucionaria y del mismísimo Poncio Pilatos, su propia versión del calvario.'),
('Los caballeros de la mesa cuadrada.jpg', 'Los caballeros de la mesa cuadrada y sus locos seguidores', 46, 'Comedia.', '1975', 91, 'Segunda película de los Monty Python, en la que abordan la historia del legendario rey Arturo y de sus caballeros que van a la búsqueda del Santo Grial. '),
('El sentido de la vida.jpg', 'El sentido de la vida', 47, 'Comedia.', '1983', 103, 'Conjunto de episodios que muestran de forma disparatada los momentos más importantes del ciclo de la vida. Desde el nacimiento a la muerte, pasando por asuntos como la filosofía, la historia o la medicina, todo tratado con el inconfundible humor de los populares cómicos ingleses. El prólogo es un cortometraje independiente rodado por Terry Gilliam: \"Seguros permanentes Crimson\". '),
('La teoria del todo.jpg', 'La teoría del todo', 48, 'Drama.', '2014', 123, 'Narra la relación entre el célebre astrofísico Stephen Hawking y su primera mujer, Jane, desde que ambos se conocieron siendo estudiantes en la Universidad de Cambridge a principios de los 60 y a lo largo de 25 años, especialmente en su lucha juntos contra la enfermedad degenerativa que postró al famoso científico en una silla de ruedas.'),
('Pinocho.jpg', 'Pinocho', 49, 'Animación.', '1940', 84, 'Un anciano llamado Geppetto fabrica una marioneta de madera a la que llama Pinocho, con la esperanza de que se convierta en un niño de verdad. El Hada Azul hace realidad su deseo y da vida a Pinocho, pero conserva su cuerpo de madera. Pepito Grillo, la conciencia de Pinocho, tendrá que aconsejarlo para que se aleje de las situaciones difíciles o peligrosas hasta conseguir que el muñeco se convierta en un niño de carne y hueso.'),
('La Cenicienta.jpg', 'La Cenicienta', 50, 'Animación.', '1950', 75, 'Cenicienta era una hermosa y bondadosa joven, a quien su cruel madrastra y sus dos hermanastras obligaban a ocuparse de las labores más duras del palacio, como si fuera la última de las criadas. Sucedió que el hijo del Rey celebró un gran baile. Cenicienta ayudó a sus egoístas hermanastras a vestirse y peinarse para la fiesta. Cuando se hubieron marchado, la pobre niña se echó a llorar amargamente porque también le hubiera gustado ir al baile. Pero hete aquí que su hada madrina le hizo una carroza con una calabaza, convirtió seis ratoncitos en otros tantos caballos, una rata en un grueso cochero, y seis lagartos en elegantes lacayos. Después tocó a Cenicienta con su varita mágica y sus harapos se convirtieron en un vestido resplandeciente, y sus alpargatas en preciosos zapatitos de cristal. Pero el hada advirtió a Cenicienta que a medianoche, todo volvería a ser como antes. Cuando llegó a la fiesta, su radiante belleza causó asombro y admiración. El Príncipe no se apartó de ella ni un solo instante. Poco antes de la doce, Cenicienta se retiró. Al día siguiente, seguían los festejos principescos y todo se repitió de igual manera que la víspera. Pero la pobre Cenicienta, tan feliz con su Príncipe, se olvidó de que a las doce terminaba el hechizo. Cuando oyó la primera campanada de la medianoche, echó a correr y perdió uno de sus zapatos de cristal. '),
('Cenicienta 2.jpg', 'La Cenicienta 2: ¡La magia no termina a medianoche!', 51, 'Animación.', '2002', 70, 'Cuando La Cenicienta y El Príncipe vuelven al castillo tras su luna de miel, la nueva princesa se encuentra de repente con su nuevo trabajo como esposa Real. Con la ayuda del Hada Madrina favorita y una banda de simpáticos ratoncillos, La Cenicienta y sus amigos descubren que el único camino al éxito es ser uno mismo.'),
('SharkBoy.jpg', 'Las aventuras de Sharkboy y Lavagirl', 52, 'Aventuras.', '2005', 94, 'Mientras pasa las vacaciones solo, los héroes imaginarios (amigos con superpoderes) de un chico con mucha imaginación cobran vida y le invitarán a pasar múltiples aventuras.'),
('Spy Kids.jpg', 'Spy Kids', 53, 'Aventuras.', '2001', 88, 'Cuando el matrimonio Cortez -aparentes padres de familia normales y corrientes pero que en realidad son superespías internacionales- es secuestrado por el malvado Floop, sus hijos no tendrán más remedio que intentar salvarles en una trepidante aventura llena de acción y peligros'),
('Spy Kids 2.jpg', 'Spy Kids 2: La isla de los sueños perdidos', 54, 'Aventuras.', '2002', 100, 'Nueva aventura de los hijos del matrimonio de espías internacionales Cortez. En esta entrega, toda la familia se encontrará en una misteriosa isla donde no funcionan sus aparatos de espionaje, y habitada por unos extraños seres a los que jamás habían visto antes.'),
('Spy Kids 3.jpg', 'Spy Kids 3: Game Over', 55, 'Aventuras.', '2003', 83, 'La tecnología HD/3-D entra en escena cuando los jóvenes agentes Juni (Daryl Sabara) y Carmen Cortez (Alexa Vega) emprenden la misión más emocionante de sus vidas: un viaje al interior de la realidad virtual de un videojuego en 3D que ha sido especialmente diseñado para acabar con ellos. Un videojuego en el que cobran vida los gráficos y criaturas más sorprendentes que puedan imaginarse. Los Spy Kids tendrán que plantar cara a unos niveles del juego cada vez más difíciles con el humor, los dispositivos especiales, la valentía, el espíritu familiar y sus rápidos reflejos como armas. Entre los muchos desafíos a los que deberán enfrentarse se incluyen, por ejemplo, una carrera contra los guerreros de la carretera o practicar surf sobre lava candente, todo para salvar al mundo de un villano sediento de poder: El Fabricante de Juguetes (Sylvester Stallone). '),
('Spy Kids 4.jpg', 'Spy Kids 4: All the Time in the World', 56, 'Aventuras.', '2011', 89, 'Robert Rodriguez vuelve a ponerse tras las cámaras para dirigir \'Spy Kids 4\', un reinicio de la saga, con otros personajes.'),
('La espada Magica.jpg', 'La espada mágica: En busca de Camelot', 57, 'Animación.', '1998', 86, 'Excalibur, la espada mágica del Rey Arturo, ha sido robada por un malvado villano poniendo en peligro el reino de Camelot. Para salvarlo, Kaley, una valiente joven cuyo sueño es ser caballero de la Mesa Redonda, acompañada de dos peculiares personajes, emprende la búsqueda de la espada en un mundo tan fantástico como peligroso.'),
('La Princesa Cisne.jpg', 'La princesa cisne', 58, 'Animación.', '1994', 86, 'Una bella princesa se convierte en cisne por un hechizo. En su cautiverio se hace amiga de una rana, una tortuga y un pájaro, mientras espera que el desencantamiento llegue a través del amor. Se necesitaron 250 dibujantes y más de 4 años de trabajo para realizarla.'),
('Pesadilla Antes de Navidad.jpg', 'Pesadilla antes de Navidad', 59, 'Animación.', '1993', 73, 'Cuando Jack Skellington, el Señor de Halloween, descubre la Navidad, se queda fascinado y decide mejorarla. Sin embargo, su visión de la festividad es totalmente contraria al espíritu navideño. Sus planes incluyen el secuestro de Santa Claus y la introducción de cambios bastante macabros. Sólo su novia Sally es consciente del error que está cometiendo.'),
('Beetlejuice.jpg', 'Beetlejuice', 60, 'Comedia.', '1988', 92, 'Un matrimonio de fantasmas (Geena Davis y Alec Baldwin) contrata los servicios de Bitelchus (Michael Keaton), un especialista en asustar mortales, para que ahuyente a los nuevos propietarios de su querida casa Victoriana.'),
('Frankenweenie.jpg', 'Frankenweenie', 61, 'Animación.', '2012', 87, 'Película basada en el cortometraje homónimo que el propio Burton realizó en 1984. El experimento científico que lleva a cabo el pequeño Victor para hacer resucitar su adorado perro Sparky, lo obligará a afrontar terribles situaciones cuyas consecuencias son imprevisibles. '),
('Your Name.jpg', 'Your name', 62, 'Drama.', '2016', 106, 'Taki y Mitsuha descubren un día que durante el sueño sus cuerpos se intercambian, y comienzan a comunicarse por medio de notas. A medida que consiguen superar torpemente un reto tras otro, se va creando entre los dos un vínculo que poco a poco se convierte en algo más romántico.'),
('La Novia Cadaver.jpg', 'La novia cadáver', 63, 'Animación.', '2005', 75, 'Un hombre pone en el dedo de una mujer muerta, como broma, un anillo de compromiso. Pero lo que no sabe el pobre mortal es que la muerta reclamará sus derechos como \"prometida\". '),
('La chica que saltaba a traves del tiempo.jpg', 'La chica que saltaba a través del tiempo', 64, 'Drama.', '2006', 98, 'El tiempo del instituto es uno de los más entrañables durante la adolescencia. Para la joven Makoto y sus amigos Chiaki y Kosuke es realmente importante pasarlo bien juntos tanto tiempo como puedan, jugando a béisbol después de clase, ya que los tres están a punto de subir de grado y el año que viene quizás no continúen juntos los estudios. Pero un día, Makoto recibe un peculiar don: la capacidad de ir hacia atrás en el tiempo dando agigantados brincos. Makoto usará esta habilidad para evadir los problemas y alargar la diversión.'),
('Lo Mejor de mi.jpg', 'Lo mejor de mi', 65, 'Drama.', '2014', 117, 'Dawson y Amanda, dos antiguos novios del instituto que tuvieron que separarse por presión del padre de ella, se reencuentran tras 20 años, cuando ambos vuelven a visitar su pueblo natal... Nueva adaptación al cine de una novela de Nicholas Sparks, también autor de \"El diario de Noa\", con la que \"The Best of Me\" guarda muchas semejanzas en el argumento.'),
('El diario de Noa.jpg', 'El diario de Noa', 66, 'Drama.', '2004', 124, 'En una residencia de ancianos, un hombre (James Garner) lee a una mujer (Gena Rowlands) una historia de amor escrita en su viejo cuaderno de notas. Es la historia de Noah Calhoun (Ryan Gosling) y Allie Hamilton (Rachel McAdams), dos jóvenes adolescentes de Carolina del Norte que, a pesar de vivir en dos ambientes sociales muy diferentes, se enamoraron profundamente y pasaron juntos un verano inolvidable, antes de ser separados, primero por sus padres, y más tarde por la guerra. '),
('La La Land.jpg', 'La La Land', 67, 'Musical.', '2016', 128, 'Mia (Emma Stone), una joven aspirante a actriz que trabaja como camarera mientras acude a castings, y Sebastian (Ryan Gosling), un pianista de jazz que se gana la vida tocando en sórdidos tugurios, se enamoran, pero su gran ambición por llegar a la cima en sus carreras artísticas amenaza con separarlos. '),
('El Caballero Oscuro.jpg', 'El caballero oscuro', 68, 'Acción.', '2008', 152, 'Batman/Bruce Wayne (Christian Bale) regresa para continuar su guerra contra el crimen. Con la ayuda del teniente Jim Gordon (Gary Oldman) y del Fiscal del Distrito Harvey Dent (Aaron Eckhart), Batman se propone destruir el crimen organizado en la ciudad de Gotham. El triunvirato demuestra su eficacia, pero, de repente, aparece Joker (Heath Ledger), un nuevo criminal que desencadena el caos y tiene aterrados a los ciudadanos.'),
('El Caballero Oscuro 2.jpg', 'El caballero oscuro: la leyenda renace', 69, 'Acción.', '2012', 165, 'Hace ocho años que Batman desapareció, dejando de ser un héroe para convertirse en un fugitivo. Al asumir la culpa por la muerte del fiscal del distrito Harvey Dent, el Caballero Oscuro decidió sacrificarlo todo por lo que consideraba, al igual que el Comisario Gordon, un bien mayor. La mentira funciona durante un tiempo, ya que la actividad criminal de la ciudad de Gotham se ve aplacada gracias a la dura Ley Dent. Pero todo cambia con la llegada de una astuta gata ladrona que pretende llevar a cabo un misterioso plan. Sin embargo, mucho más peligrosa es la aparición en escena de Bane, un terrorista enmascarado cuyos despiadados planes obligan a Bruce a regresar de su voluntario exilio.'),
('Batman Begins.jpg', 'Batman Begins', 70, 'Acción.', '2005', 140, 'Nueva adaptación del famoso cómic. Narra los orígenes de la leyenda de Batman y los motivos que lo convirtieron en el representante del Bien en la ciudad de Gotham. Bruce Wayne vive obsesionado con el recuerdo de sus padres, muertos a tiros en su presencia. Atormentado por el dolor, se va de Gotham y recorre el mundo hasta que encuentra a un extraño personaje que lo adiestra en todas las disciplinas físicas y mentales que le servirán para combatir el Mal. Por esta razón, la Liga de las Sombras, una poderosa y subversiva sociedad secreta, dirigida por el enigmático Ra\'s Al Ghul, intenta reclutarlo. Cuando Bruce vuelve a Gotham, la ciudad está dominada por el crimen y la corrupción. Con la ayuda de su leal mayordomo Alfred, del detective de la policía Jim Gordon y de Lucius Fox, su colega en una Sociedad de Ciencias Aplicadas, Wayne libera a su alter ego: Batman, un justiciero enmascarado que utiliza la fuerza, la inteligencia y la más alta tecnología para luchar contra las siniestras fuerzas que amenazan con destruir la ciudad.'),
('Merlin.jpg', 'Merlín, el encantador', 71, 'Animación.', '1963', 79, 'Encantador relato de dibujos animados para los más pequeños sobre la leyenda del rey Arturo (aquí siendo todavía joven), el mago Merlín y la espada Excalibur. Aventuras mil, magia y fantasía para otro gran éxito de la Disney.'),
('Casi Famosos.jpg', 'Casi famosos', 72, 'Comedia.', '2002', 122, 'Homenaje al rock de los 70. Gracias a sus buenas críticas musicales, un adolescente que aspira a ser periodista es contratado por la revista \"Rolling Stone\" para cubrir la gira de una famosa banda. A pesar de su juventud y de la oposición de su madre, el chico vivirá con los músicos y sus fans una aventura inolvidable. Basada en la propia experiencia de Crowe.'),
('La Llamada.jpg', 'La Llamada', 73, 'Musical.', '2017', 108, 'María y Susana son dos adolescentes rebeldes de 17 años que se encuentran en el campamento de verano cristiano \"La brújula\" en Segovia, al que van desde pequeñas. Ambas sienten pasión por el reggaeton y el electro-latino, pero las sorprendentes apariciones de Dios a María comenzarán a cambiar sus vidas... Adaptación cinematográfica del musical homónimo del año 2013, de gran éxito en España.'),
('Malditos Bastardos.jpg', 'Malditos Bastardos', 74, 'Acción.', '2009', 153, 'Segunda Guerra Mundial (1939-1945). En la Francia ocupada por los alemanes, Shosanna Dreyfus (Mélanie Laurent) presencia la ejecución de su familia por orden del coronel Hans Landa (Christoph Waltz). Después de huir a París, adopta una nueva identidad como propietaria de un cine. En otro lugar de Europa, el teniente Aldo Raine (Brad Pitt) adiestra a un grupo de soldados judíos (\"The Basterds\") para atacar objetivos concretos. Los hombres de Raine y una actriz alemana (Diane Kruger), que trabaja para los aliados, deben llevar a cabo una misión que hará caer a los jefes del Tercer Reich. El destino quiere que todos se encuentren bajo la marquesina de un cine donde Shosanna espera para vengarse.'),
('Titanic.jpg', 'Titanic', 75, 'Drama.', '1997', 195, 'Jack (DiCaprio), un joven artista, gana en una partida de cartas un pasaje para viajar a América en el Titanic, el transatlántico más grande y seguro jamás construido. A bordo conoce a Rose (Kate Winslet), una joven de una buena familia venida a menos que va a contraer un matrimonio de conveniencia con Cal (Billy Zane), un millonario engreído a quien sólo interesa el prestigioso apellido de su prometida. Jack y Rose se enamoran, pero el prometido y la madre de ella ponen todo tipo de trabas a su relación. Mientras, el gigantesco y lujoso transatlántico se aproxima hacia un inmenso iceberg.'),
('Avatar.jpg', 'Avatar', 76, 'Acción.', '2009', 162, 'Año 2154. Jake Sully (Sam Worthington), un ex-marine condenado a vivir en una silla de ruedas, sigue siendo, a pesar de ello, un auténtico guerrero. Precisamente por ello ha sido designado para ir a Pandora, donde algunas empresas están extrayendo un mineral extraño que podría resolver la crisis energética de la Tierra. Para contrarrestar la toxicidad de la atmósfera de Pandora, se ha creado el programa Avatar, gracias al cual los seres humanos mantienen sus conciencias unidas a un avatar: un cuerpo biológico controlado de forma remota que puede sobrevivir en el aire letal. Esos cuerpos han sido creados con ADN humano, mezclado con ADN de los nativos de Pandora, los Na\'vi. Convertido en avatar, Jake puede caminar otra vez. Su misión consiste en infiltrarse entre los Na\'vi, que se han convertido en el mayor obstáculo para la extracción del mineral. Pero cuando Neytiri, una bella Na\'vi (Zoe Saldana), salva la vida de Jake, todo cambia: Jake, tras superar ciertas pruebas, es admitido en su clan. Mientras tanto, los hombres esperan los resultados de la misión de Jake.'),
('Pulp Fiction.jpg', 'Pulp Fiction', 77, 'Thriller', '1994', 154, 'Jules y Vincent, dos asesinos a sueldo con no demasiadas luces, trabajan para el gángster Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su atractiva mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse \"manos a la obra\". Su misión: recuperar un misterioso maletín.'),
('Kill Bill.jpg', 'Kill Bill: Vol. I', 78, 'Acción.', '2003', 110, 'El día de su boda, una asesina profesional (Thurman) sufre el ataque de algunos miembros de su propia banda, que obedecen las órdenes de Bill (David Carradine), el jefe de la organización criminal. Logra sobrevivir al ataque, aunque queda en coma. Cuatro años después despierta dominada por un gran deseo de venganza.'),
('Kill Bill 2.jpg', 'Kill Bill: Vol. II', 79, 'Acción.', '2004', 136, 'Tras eliminar a algunos miembros de la banda que intentaron asesinarla el día de su boda, \"Mamba Negra\" (Uma Thurman) intenta acabar con los demás, especialmente con Bill, su antiguo jefe (David Carradine), que la había dado por muerta'),
('The Room.jpg', 'The Room', 80, 'Drama.', '2003', 99, 'Cuenta la historia de Johnny, un tipo especial, un buenazo que vive feliz con su novia Lisa y con un grupo de amigos de los de verdad: su vecino Denny, un chico huérfano al que querría adoptar, y que tiene la extraña manía de intentar meterse con ellos en su cama en plena ¿guerra de almohadas?; Mark, su mejor amigo, un rubio guaperas; y la madre de Lisa, que quiere que su hija se case por dinero y que tiene un cáncer de mama al que da la misma importancia que no tener suelto para tabaco. Pero Johnny vive una mentira: su novia Lisa está aburrida de él.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas_vistas`
--

CREATE TABLE `peliculas_vistas` (
  `Nombre_Usuario` varchar(25) NOT NULL,
  `Codigo_Peliculas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peliculas_vistas`
--

INSERT INTO `peliculas_vistas` (`Nombre_Usuario`, `Codigo_Peliculas`) VALUES
('laura', 60),
('sara', 6),
('sara', 30),
('sara', 56),
('andrea', 70),
('andrea', 76),
('andrea', 69),
('victor', 72),
('sara', 40),
('sara', 20),
('sara', 76),
('victor', 76),
('sara', 41),
('sara', 9),
('sara', 11),
('sara', 70),
('victor', 40),
('victor', 10),
('victor', 11),
('victor', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_actores`
--

CREATE TABLE `pelicula_actores` (
  `id_pelicula` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelicula_actores`
--

INSERT INTO `pelicula_actores` (`id_pelicula`, `id_actor`) VALUES
(1, 2),
(1, 3),
(1, 4),
(6, 5),
(6, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(5, 13),
(5, 12),
(72, 11),
(74, 1),
(7, 14),
(7, 15),
(8, 16),
(8, 17),
(9, 18),
(9, 19),
(10, 20),
(10, 21),
(11, 20),
(11, 21),
(12, 20),
(12, 21),
(13, 22),
(13, 23),
(14, 24),
(14, 25),
(15, 26),
(15, 27),
(16, 28),
(16, 29),
(17, 28),
(17, 29),
(18, 28),
(18, 29),
(19, 29),
(19, 28),
(20, 30),
(20, 31),
(21, 32),
(21, 33),
(22, 34),
(22, 35),
(23, 36),
(23, 37),
(24, 38),
(24, 39),
(25, 38),
(25, 39),
(26, 38),
(26, 39),
(27, 40),
(27, 41),
(28, 42),
(28, 43),
(29, 44),
(29, 45),
(30, 46),
(30, 47),
(31, 48),
(31, 49),
(32, 50),
(32, 51),
(33, 50),
(33, 51),
(34, 50),
(34, 51),
(35, 52),
(35, 53),
(36, 54),
(36, 55),
(37, 54),
(37, 55),
(38, 54),
(38, 55),
(39, 56),
(39, 57),
(40, 58),
(40, 59),
(41, 60),
(41, 61),
(42, 62),
(42, 63),
(43, 62),
(43, 63),
(44, 62),
(44, 63),
(45, 64),
(45, 65),
(46, 64),
(46, 65),
(47, 64),
(47, 65),
(48, 66),
(48, 67),
(49, 68),
(49, 69),
(50, 70),
(50, 71),
(51, 71),
(51, 72),
(52, 73),
(52, 74),
(53, 75),
(53, 76),
(54, 75),
(54, 76),
(55, 75),
(55, 76),
(56, 75),
(56, 76),
(57, 77),
(57, 78),
(58, 79),
(58, 80),
(59, 81),
(59, 82),
(60, 83),
(60, 84),
(61, 85),
(61, 86),
(62, 87),
(62, 88),
(63, 89),
(63, 90),
(64, 91),
(65, 92),
(65, 93),
(66, 94),
(67, 94),
(66, 95),
(67, 96),
(68, 97),
(68, 98),
(69, 97),
(69, 98),
(70, 97),
(70, 98),
(71, 99),
(71, 100),
(73, 101),
(73, 102),
(74, 103),
(75, 104),
(75, 105),
(76, 106),
(76, 107),
(77, 108),
(77, 109),
(77, 110),
(78, 110),
(78, 111),
(79, 110),
(79, 111),
(80, 112),
(80, 113);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retos`
--

CREATE TABLE `retos` (
  `NombreReto` varchar(50) NOT NULL,
  `NumeroPeliculas` int(11) NOT NULL,
  `Descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `retos`
--

INSERT INTO `retos` (`NombreReto`, `NumeroPeliculas`, `Descripcion`) VALUES
('Reto Oscar', 4, 'Las películas más famosas y premiadas.'),
('Reto Terror', 4, '¡BUH! ¿Te ha dado miedo? ¿Si? Mirate estas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retos_y_peliculas`
--

CREATE TABLE `retos_y_peliculas` (
  `NombreReto` varchar(50) NOT NULL,
  `CodigoPelicula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `retos_y_peliculas`
--

INSERT INTO `retos_y_peliculas` (`NombreReto`, `CodigoPelicula`) VALUES
('Reto Oscar', 4),
('Reto Oscar', 48),
('Reto Oscar', 67),
('Reto Oscar', 75),
('Reto Terror', 8),
('Reto Terror', 31),
('Reto Terror', 32),
('Reto Terror', 59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `nombreusu` varchar(20) CHARACTER SET latin1 NOT NULL,
  `fotoPerfil` text NOT NULL,
  `email` varchar(25) CHARACTER SET latin1 NOT NULL,
  `user_type` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `Contador_Peliculas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nombreusu`, `fotoPerfil`, `email`, `user_type`, `password`, `Contador_Peliculas`) VALUES
('alex', 'Batman.jpg', 'alex@gmail.com', 1, 'a4dc47cc7bb059da6dd2d9ce63bbbd7e11747df7', 0),
('andrea', 'Chuck.jpg', 'andrea@gmail.com', 0, '33e299c8d17897c7e37373f344945e6063a05eb3', 3),
('juan', 'Kubrick.jpg', 'juan@gmail.com', 0, 'dcb17adc52785209f02a735686b3c53d5bac3709', 0),
('laura', 'Nolan.jpg', 'laura@gmail.com', 0, '10eb570786fdce4150905bd6b9a16dd4bb932f09', 1),
('pedro', 'Olivia.jpg', 'pedro@gmail.com', 0, 'bdc7eb3cfc152df04e5f1fa283f7a96bc533a966', 0),
('pepe', 'Robin.jpg', 'pepe@gmail.com', 0, '302a9f8680f18253308988c8a5a868b439db7da5', 0),
('sara', 'superman.jpg', 'sara@gmail.com', 0, '8e5025c57689df1ada311f2d79c6403cae220b79', 10),
('victor', 'W.jpg', 'victor@victo.com', 0, '5011d4e71187b6e551d91fe79d1c64ba5b62d191', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actores_actrices`
--
ALTER TABLE `actores_actrices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `listas_peliculas`
--
ALTER TABLE `listas_peliculas`
  ADD PRIMARY KEY (`codigoListas`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `retos`
--
ALTER TABLE `retos`
  ADD PRIMARY KEY (`NombreReto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nombreusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actores_actrices`
--
ALTER TABLE `actores_actrices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `listas_peliculas`
--
ALTER TABLE `listas_peliculas`
  MODIFY `codigoListas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `Codigo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
