-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	8.0.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `idcategoria` int NOT NULL,
  `Nombre_Categoria` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Imagen` blob,
  `Activo` varchar(45) DEFAULT NULL,
  `iddiseño` int DEFAULT NULL,
  `producto_idproducto` int NOT NULL,
  PRIMARY KEY (`idcategoria`),
  KEY `fk_categoria_producto1_idx` (`producto_idproducto`),
  CONSTRAINT `fk_categoria_producto1` FOREIGN KEY (`producto_idproducto`) REFERENCES `producto` (`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle`
--

DROP TABLE IF EXISTS `detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalle` (
  `iddetalle` int NOT NULL,
  `idproducto` int DEFAULT NULL,
  `Numero_Orden` int DEFAULT NULL,
  `Precio` decimal(10,0) DEFAULT NULL,
  `Cantidad` int DEFAULT NULL,
  `Descuento` decimal(10,0) DEFAULT NULL,
  `Tamaño` varchar(45) DEFAULT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Fecha_Envio` datetime DEFAULT NULL,
  `idorden` int DEFAULT NULL,
  `producto_idproducto` int NOT NULL,
  PRIMARY KEY (`iddetalle`),
  KEY `fk_detalle_producto1_idx` (`producto_idproducto`),
  CONSTRAINT `fk_detalle_producto1` FOREIGN KEY (`producto_idproducto`) REFERENCES `producto` (`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle`
--

LOCK TABLES `detalle` WRITE;
/*!40000 ALTER TABLE `detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diseño`
--

DROP TABLE IF EXISTS `diseño`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diseño` (
  `iddiseño` int NOT NULL,
  `Subida_Diseño` varchar(45) DEFAULT NULL,
  `Titulo_Diseño` varchar(45) DEFAULT NULL,
  `Etiquetas` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `idproducto` int DEFAULT NULL,
  `idcategoria` int DEFAULT NULL,
  `idusuario` int DEFAULT NULL,
  `categoria_idcategoria` int NOT NULL,
  PRIMARY KEY (`iddiseño`),
  KEY `fk_diseño_categoria1_idx` (`categoria_idcategoria`),
  CONSTRAINT `fk_diseño_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diseño`
--

LOCK TABLES `diseño` WRITE;
/*!40000 ALTER TABLE `diseño` DISABLE KEYS */;
/*!40000 ALTER TABLE `diseño` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `envio`
--

DROP TABLE IF EXISTS `envio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `envio` (
  `idenvio` int NOT NULL,
  `Compañia` varchar(45) DEFAULT NULL,
  `Ciudadad` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `orden_idorden` int NOT NULL,
  PRIMARY KEY (`idenvio`),
  KEY `fk_envio_orden1_idx` (`orden_idorden`),
  CONSTRAINT `fk_envio_orden1` FOREIGN KEY (`orden_idorden`) REFERENCES `orden` (`idorden`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `envio`
--

LOCK TABLES `envio` WRITE;
/*!40000 ALTER TABLE `envio` DISABLE KEYS */;
/*!40000 ALTER TABLE `envio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metodo_pago`
--

DROP TABLE IF EXISTS `metodo_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metodo_pago` (
  `idmetodo_pago` int NOT NULL,
  `Tipo_Tarjeta` varchar(45) DEFAULT NULL,
  `Num_Tarjeta` varchar(16) DEFAULT NULL,
  `usuario_idusuario` int NOT NULL,
  `orden_idorden` int NOT NULL,
  PRIMARY KEY (`idmetodo_pago`),
  KEY `fk_metodo_pago_usuario1_idx` (`usuario_idusuario`),
  KEY `fk_metodo_pago_orden1_idx` (`orden_idorden`),
  CONSTRAINT `fk_metodo_pago_orden1` FOREIGN KEY (`orden_idorden`) REFERENCES `orden` (`idorden`),
  CONSTRAINT `fk_metodo_pago_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metodo_pago`
--

LOCK TABLES `metodo_pago` WRITE;
/*!40000 ALTER TABLE `metodo_pago` DISABLE KEYS */;
/*!40000 ALTER TABLE `metodo_pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden`
--

DROP TABLE IF EXISTS `orden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orden` (
  `idorden` int NOT NULL,
  `Numero_Orden` int DEFAULT NULL,
  `Fecha_Orden` datetime DEFAULT NULL,
  `Fecha_Envio` datetime DEFAULT NULL,
  `idenvio` int DEFAULT NULL,
  `Costo_Envio` decimal(10,0) DEFAULT NULL,
  `ISV` decimal(10,0) DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL,
  `St_Transaccion` varchar(45) DEFAULT NULL,
  `Fecha_Pago` datetime DEFAULT NULL,
  `ordencol` varchar(45) DEFAULT NULL,
  `detalle_iddetalle` int NOT NULL,
  `usuario_idusuario` int NOT NULL,
  PRIMARY KEY (`idorden`),
  KEY `fk_orden_detalle1_idx` (`detalle_iddetalle`),
  KEY `fk_orden_usuario1_idx` (`usuario_idusuario`),
  CONSTRAINT `fk_orden_detalle1` FOREIGN KEY (`detalle_iddetalle`) REFERENCES `detalle` (`iddetalle`),
  CONSTRAINT `fk_orden_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden`
--

LOCK TABLES `orden` WRITE;
/*!40000 ALTER TABLE `orden` DISABLE KEYS */;
/*!40000 ALTER TABLE `orden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `idproducto` int NOT NULL,
  `idcategoria` int DEFAULT NULL,
  `iddiseño` int DEFAULT NULL,
  `QTY_EA` int DEFAULT NULL,
  `Precio_Unitario` decimal(10,0) DEFAULT NULL,
  `Tamaño_Disponible` varchar(45) DEFAULT NULL,
  `Colores_Disponibles` varchar(45) DEFAULT NULL,
  `Imagen` blob,
  `Tamaño` int DEFAULT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Descuento` decimal(10,0) DEFAULT NULL,
  `Peso_Unidad` decimal(10,0) DEFAULT NULL,
  `Stock` int DEFAULT NULL,
  `Unidades_Orden` int DEFAULT NULL,
  `Producto_Disponible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol` (
  `idrol` int NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idusuario` int NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Direccion_Envio` varchar(45) DEFAULT NULL,
  `Recibo_Pago` varchar(45) DEFAULT NULL,
  `Direccion_Facturacion` varchar(45) DEFAULT NULL,
  `diseño_iddiseño` int NOT NULL,
  `idrol` int DEFAULT NULL,
  `rol_idrol` int NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_diseño1_idx` (`diseño_iddiseño`),
  KEY `fk_usuario_rol1_idx` (`rol_idrol`),
  CONSTRAINT `fk_usuario_diseño1` FOREIGN KEY (`diseño_iddiseño`) REFERENCES `diseño` (`iddiseño`),
  CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`rol_idrol`) REFERENCES `rol` (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-04 21:38:39
