CREATE TABLE `gruposinvg` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `unidad_acad` text NOT NULL,
  `nombre_grupo` text NOT NULL,
  `nombre_coor` text NOT NULL,
  `acronimo` text NOT NULL,
  `fecha_creacion` year(4) NOT NULL,
  `obj_grupo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
