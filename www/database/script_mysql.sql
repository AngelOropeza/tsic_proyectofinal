CREATE DATABASE tsic;

use tsic;

CREATE TABLE estudio(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  anhio INTEGER(4) NULL
);

CREATE TABLE pelicula(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  sinopsis TEXT NULL,
  clasificacion CHAR(2) NOT NULL,
  poster VARCHAR(255),
  video VARCHAR(255),
  fecha_estreno TIMESTAMP,
  id_estudio INT(11) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_estudio) REFERENCES estudio(id) ON DELETE CASCADE
);

CREATE TABLE elenco(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  edad INTEGER NULL,
  rol VARCHAR(255) NOT NULL,
  nacionalidad VARCHAR(255) NOT NULL,
  id_pelicula INT(11) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_pelicula) REFERENCES pelicula(id) ON DELETE CASCADE
);

INSERT INTO estudio(id, nombre, anhio) 
VALUES 
  (1, "Warner Bros", 2015),
  (2, "Picsart", 2015),
  (3, "Netflix", 2015),
  (4, "Dreamworks", 2015),
  (5, "Lyon", 2015);

INSERT INTO pelicula(id, nombre, sinopsis, clasificacion, poster, video, fecha_estreno, id_estudio)
VALUES
  (1, "Batman", "El hombre murcielago", "B", "./media/posters/batman.jpg", "./media/videos/batman.mp4", CURRENT_TIMESTAMP, 1),
  (2, "Superman", "Un marciano", "A", "./media/posters/superman.jpg", "./media/videos/superman.mp4", CURRENT_TIMESTAMP, 2),
  (3, "Avengers", "Muchos superheroes", "A", "./media/posters/avengers.jpg", "./media/videos/avengers.mp4", CURRENT_TIMESTAMP, 2),
  (4, "Spiderman", "El hombre araña", "B", "./media/posters/spiderman.jpg", "./media/videos/spiderman.mp4", CURRENT_TIMESTAMP, 3),
  (5, "Shrek", "El hombre verde", "A", "./media/posters/shrek.jpg", "./media/videos/shrek.mp4", CURRENT_TIMESTAMP, 4),
  (6, "Hulk", "El hombre verde y fuerte", "C", "./media/posters/hulk.jpg", "./media/videos/hulk.mp4", CURRENT_TIMESTAMP, 5);

INSERT INTO elenco(id, nombre, edad, rol, nacionalidad, id_pelicula)
VALUES
  (1, "Maria", 21, "Actriz", "Mexicana", 1),
  (2, "Juan", 21, "Actor", "Italiano", 1),
  (3, "Antonia", 21, "Actriz", "Mexicana", 1),
  (4, "Rosa", 22, "Directora", "Mexicana", 2),
  (5, "Antonio", 23, "Director", "Ruso", 3),
  (6, "Juana", 24, "Actriz", "Mexicana", 4),
  (7, "Isabel", 25, "Actriz", "Mexicana", 5),
  (8, "Rosalia", 30, "Actriz", "Mexicana", 6);