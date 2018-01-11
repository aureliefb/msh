-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: msh
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `allergene`
--

DROP TABLE IF EXISTS `allergene`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allergene` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_allergene` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `icone` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allergene`
--

LOCK TABLES `allergene` WRITE;
/*!40000 ALTER TABLE `allergene` DISABLE KEYS */;
INSERT INTO `allergene` VALUES (1,'Céréales','Céréales contenant du Gluten (blé, seigle, orge, avoine, épeautre, kamut)','cereales-gluten.png'),(2,'Sans gluten','Sans gluten','sans-gluten.png'),(3,'Fruits à coques','Amandes, noisettes, noix, noix de cajou, pécan, macadamia, pistaches et produits à base de ces fruits.','fruits-coques.png'),(4,'Arachides','Arachides et produits à base d’arachides.','arachides.png'),(5,'Œufs','Œufs et produits à base d’œufs','oeufs.png'),(6,'Avoine','Avoine','avoine.png'),(7,'Graines de sésame','Graines de sésame et produits à base de graines de Sésame)','sesame.png'),(8,'Lait','Lait et produits à base de lait (y compris lactose)','lait.png'),(9,'Maïs','Maïs','mais.png'),(10,'Crustacés',' Crustacés, Mollusques, et produits à base de crustacés ou de mollusques','crustaces.png'),(11,'Poissons','Poissons et produits à base de poissons','poissons.png'),(12,'Soja','Soja et produits à base de soja','soja.png');
/*!40000 ALTER TABLE `allergene` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boutique`
--

DROP TABLE IF EXISTS `boutique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boutique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_boutique` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `horaires` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boutique`
--

LOCK TABLES `boutique` WRITE;
/*!40000 ALTER TABLE `boutique` DISABLE KEYS */;
/*!40000 ALTER TABLE `boutique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'pain'),(2,'viennoiserie'),(3,'saisonnier'),(4,'biscuits'),(5,'cake'),(6,'desserts'),(7,'bloomer'),(8,'autres');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_allergene` int(11) NOT NULL,
  `photo` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `label` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `url_prod` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produit`
--

LOCK TABLES `produit` WRITE;
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` VALUES (1,'Saint-Honoré','Pain spécialité de la maison',1,0,'saint-honore.jpg',1,1,'saint-honore'),(2,'Saint-Honoré au Miel','Miel de châtaignier AOP (Corse)',1,0,'',1,1,'saint-honore-miel'),(3,'Saint-Honoré aux Noix','',1,0,'',1,1,'saint-honore-noix'),(4,'Saint-Honoré aux Olives','',1,0,'',1,1,'saint-honore-olives'),(5,'Saint-Honoré aux Figues','',1,0,'',1,1,'saint-honore-figues'),(6,'Saint-Honoré à la Rouille','',1,0,'',0,1,'saint-honore-rouille'),(7,'Saint-Honoré Figues & Noix','',1,0,'',0,1,'saint-honore-figues-noix'),(8,'Saint-Honoré au Laurier','',1,0,'',0,1,'saint-honore-laurier'),(9,'Saint-Honoré aux raisins de Corinthe','',1,0,'',0,1,'saint-honore-raisins'),(10,'Saint-Honoré aux Truffes','',1,0,'',0,1,'saint-honore-truffes'),(11,'Saint-Honoré aux Cèpes','',1,0,'',0,1,'saint-honore-cepes'),(12,'Pain Complet','',1,0,'pain-complet-t150.jpg',1,1,'pain-complet'),(13,'Pain aux 9 Céréales','',1,0,'neuf-cereales.jpg',1,1,'pain-9-cereales'),(14,'Tradition','',1,0,'pain-tradition.jpg',1,1,'tradition'),(15,'Tradition aux Graines','',1,0,'',1,1,'tradition-graines'),(16,'Pur petit Epeautre','',1,0,'',1,1,'pur-petit-epeautre'),(17,'Baguette','',1,0,'baguette.jpg',1,1,'baguette'),(18,'Riz-Céréales','',1,0,'',1,1,'riz-cereales'),(19,'Riz-Sarrasin','',1,0,'',1,1,'riz-sarrasin'),(20,'Croissants','',2,0,'croissant.jpg',0,1,'croissant'),(21,'Brioche Nature','',2,0,'brioche-nature.jpg',0,1,'brioche-nature'),(22,'Brioche au Sucre','',2,0,'brioche-sucre.jpg',0,1,'brioche-sucre'),(23,'Brioche au Chocolat','',2,0,'',0,1,'brioche-chocolat'),(24,'Pains aux raisins','',2,0,'pain-raisin.jpg',0,1,'pain-raisins'),(25,'Pain au Chocolat','',2,0,'pain-choco.jpg',0,1,'pain-au-chocolat'),(26,'Brioche au Beurre','',2,0,'',0,1,'brioche-buerre'),(27,'Pain de mie feuilleté','',1,0,'pain-mie-feuillete.jpg',0,1,'pain-mie-feuillete'),(28,'Bloomer','',7,0,'',0,1,'bloomer'),(29,'Bloomer Pistache','',7,0,'bloomer-pistache.jpg',0,1,'bloomer-pistache'),(30,'Bloomer à la Praline','',7,0,'bloomer-praline.jpg',0,1,'bloomer-praline'),(31,'Bloomer Chocolat','',7,0,'bloomer-choco-cacao.jpg',0,1,'bloomer-chocolat'),(32,'Bloomer Choco-Orange','',7,0,'',0,1,'bloomer-choco-orange'),(33,'Bloomer Caramel Beurre Salé','',7,0,'bloomer-caramel-beurre-sale.jpg',0,1,'bloomer-caramel'),(34,'Bloomer Cranberries - Vanille','',7,0,'bloomer-cranberries-vanille.jpg',0,1,'bloomer-cranberries'),(35,'Pain de Mie','',1,0,'',0,1,'pain-mie'),(36,'Pain Müesli','',1,0,'pain-muesli.jpg',0,1,'pain-muesli'),(37,'Pain à la Châtaigne','',1,0,'',1,1,'pain-chataigne'),(38,'Tourte Auvergnate','',1,0,'tourte-auvergnate.jpg',1,1,'tourte-auvergnate'),(39,'Tourte Auvergnate aux Figues','',1,0,'',1,1,'tourte-auvergnate-figues'),(40,'Tourte Auvergnate Aux Noix','',1,0,'',1,1,'tourte-auvergnate-noix'),(41,'Focaccia au Thym','',1,0,'',1,1,'focaccia-thyme'),(42,'Focaccia aux Olives','',1,0,'',1,1,'focaccia-olives'),(43,'Focaccia Epinard-Chèvre','',1,0,'focaccia-epinards-chevre.jpg',0,1,'focaccia-epinard-chevre'),(44,'Focaccia Truffes-Coppa','',1,0,'',0,1,'focaccia-truffes-coppa'),(45,'Focaccia 3 Fromages','Emmental, parmesan, mozzarella',1,0,'focaccia-3-fromages.jpg',0,1,'focaccia-3-fromages'),(46,'Focaccia aux Algues','Dulse-Nori- Laitue de mer (Bretagne)',1,0,'',1,1,'focaccia-algues'),(47,'Focaccia au Charbon Végétal','',1,0,'',1,1,'focaccia-charbon-vegetal'),(48,'Focaccia Parmesane','Aubergine, parmesan, origan, sauce tomate',1,0,'focaccia-parmesan.jpg',0,1,'focaccia-parmesane'),(49,'Pain au Soja','',1,0,'',1,1,'pain-soja'),(50,'Kamut','',1,0,'',1,1,'kamut'),(51,'Pain burger','',1,0,'pain-burger.jpg',0,1,'pain-burger'),(52,'Black Burger','Encre de seiche',1,0,'black-burger.jpg',0,1,'black-burger'),(53,'Flan','',6,0,'flan.jpg',0,1,'flan'),(54,'Tarte aux pommes bio','',6,0,'tarte-aux-pommes.jpg',0,1,'tarte-pomme-bio'),(55,'Cookies','',4,0,'',0,1,'cookies'),(56,'Gâteau à l’Orange','',6,0,'',0,1,'gateau-orange'),(57,'Gâteau au Citron','',6,0,'',0,1,'gateau-citron'),(58,'Pain des Amis aux raisins de Corinthe','',1,0,'pain-amis-raisin-corinthe.jpg',1,1,'pain-amis-raisins-corinthe'),(59,'Seigle feuilleté','',1,0,'seigle-feuillete1.jpg',0,1,'seigle-feuillete'),(60,'Christstollen','Gâteau de Noël allemand au rhum, raisins de Corinthe et fruits confits',3,0,'christstollen.jpg',0,1,'christstollen'),(61,'Petit Beurre','Oeufs bio',4,0,'',0,1,'petit-beurre'),(62,'Sarrasin','',1,0,'',1,1,'sarrasin'),(63,'U panu di i Morti','Gâteau Corse aux noix et raisins bio',3,0,'',0,1,'u-panu-di-i-morti'),(64,'Pain de mie Truffé','',1,0,'',0,1,'pain-mie-truffe'),(65,'Petit pain salé','Au choix : olives, emmental, lardons, rouille',1,0,'petits-pains-sales.jpg',0,1,'petit-pain-sale'),(66,'Pain de mie Figues','',1,0,'',0,1,'pain-mie-figues'),(67,'Petit pain salé Crème de truffes','',1,0,'petits-pains-sales.jpg',0,1,'petit-pain-sale-creme-truffes'),(68,'Rouge du Roc','Mise en culture de variétés anciennes',1,0,'',1,1,'rouge-roc'),(69,'Rouge de Bordeaux','Mise en culture de variétés anciennes',1,0,'rouge-de-bordeaux.jpg',1,1,'rouge-bordeaux'),(70,'Blé de Population','Mise en culture de variétés anciennes',1,0,'ble-de-population.jpg',1,1,'ble-population'),(71,'Farine de Touselle','Mise en culture de variétés anciennes',1,0,'',1,1,'farine-touselle'),(72,'Pain d’Epices','',1,0,'pain-depices.jpg',0,1,'pain-depices'),(73,'Petit pain salé au parmesan','',1,0,'petits-pains-sales.jpg',0,1,'petit-pain-sale-parmesan'),(74,'Pain des Amis Marseillais','',1,0,'pain-amis-marseillais.jpg',1,1,'pain-amis-marseillais'),(75,'Méteil','',1,0,'',1,1,'meteil'),(76,'Batbout','Pain Marocain à base de semoule',3,0,'',0,1,'batbout'),(77,'Cake Vanille-Cranberries','',5,0,'',0,1,'cake-vanille-cranberries'),(78,'Cake Malibu','',5,0,'',0,1,'cake-malibu'),(79,'Cake Rhum-Vanille','',5,0,'',0,1,'cake-rhum-vanille'),(80,'Cake Vanille Encre de Seiche','',5,0,'',0,1,'cake-vanille-encre-seiche'),(81,'Cake Mojito','',5,0,'cake-mojito.jpg',0,1,'cake-mojito'),(82,'Cake au Citron','',5,0,'cake-citron.jpg',0,1,'cake-citron'),(83,'Cake aux Pistaches','',5,0,'',0,1,'cake-pistaches'),(84,'Cake aux Noisettes','',5,0,'',0,1,'cake-noisettes'),(85,'Cake aux Pralines','',5,0,'',0,1,'cake-praline'),(86,'Cake Choco-Oranges','',5,0,'',0,1,'cake-choco-orange'),(87,'Cake Chocolat Le Barry','',5,0,'',0,1,'cake-chocolate'),(88,'Cake Piña Colada','',5,0,'',0,1,'cake-pina-colada'),(89,'Pain de mie Zébré','Marbré à l’encre de seiche',1,0,'pain-de-mie-zebre.jpg',0,1,'pain-mie-zebre'),(90,'Barbu du Roussillon','Mise en culture de variétés anciennes',1,0,'',1,1,'barbu-roussillon'),(91,'Fleur de Berry','Mise en culture de variétés anciennes',1,0,'',1,1,'fleur-berry'),(92,'Oeufs Bio','Poulailler crée pour la Maison Saint-Honoré',8,5,'oeufs.jpg',0,1,'oeufs-bio'),(93,'Flan chocolat pistache','',6,0,'flan-choco-pistache.jpg',0,1,'flan-choco-pistache'),(94,'Kouign amman pomme et caramel au beurre salé','',6,0,'kouign-amman-pomme-caramel-beurre-sale.jpg',0,1,'kouign-amman-pomme-caramel'),(95,'Galette à la frangipane','',3,0,'galette-frangipane1.jpg',0,1,'galette-frangipane'),(96,'Gâteau des rois','',3,0,'gateau-des-rois-2017.jpg',0,1,'gateau-rois'),(97,'Moelleux au praliné','',6,0,'moelleux-praline.jpg',0,1,'moelleux-praline'),(98,'Pain à la courge','',1,0,'pain-a-la-courge.jpg',0,1,'pain-courge'),(99,'Pain de mie damier','',1,0,'pain-de-mie-damier.jpg',0,1,'pain-mie-damier'),(100,'Saint-Honoré ail des ours','',1,0,'saint-honore-ail-des-ours.jpg',0,1,'saint-horore-ours'),(101,'cake aux lardons ou cake à la truffes ','',5,0,'cake-sale-lardon-truffes.jpg',0,1,'cake-sale-lardon-truffes'),(102,'Gâteau Basque','',0,0,'gateau-basque.jpg',0,0,'gateau-basque'),(103,'Bloomer café crème','',7,0,'bloomer-cafe-creme.jpg',0,1,'');
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produitsallergenes`
--

DROP TABLE IF EXISTS `produitsallergenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produitsallergenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produit` int(11) NOT NULL,
  `id_allergene` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produitsallergenes`
--

LOCK TABLES `produitsallergenes` WRITE;
/*!40000 ALTER TABLE `produitsallergenes` DISABLE KEYS */;
INSERT INTO `produitsallergenes` VALUES (1,1,1),(2,12,1),(3,13,1),(4,13,6),(5,13,7),(6,38,1),(7,14,1),(8,15,1),(9,15,7),(10,16,1),(11,17,1),(12,18,2),(13,19,2),(14,77,1),(15,77,5),(16,77,8),(17,78,1),(18,78,5),(19,78,8),(20,79,1),(21,79,5),(22,79,8),(23,80,1),(24,80,5),(25,80,8),(26,80,10),(27,81,1),(28,81,5),(29,81,8),(30,82,1),(31,82,5),(32,82,8),(33,83,1),(34,83,5),(35,83,8),(36,83,3),(37,85,1),(38,85,5),(39,85,8),(40,86,1),(41,86,5),(42,86,8),(43,87,1),(44,87,5),(45,87,8),(46,33,1),(47,33,8),(48,34,1),(49,34,8),(50,88,1),(51,88,5),(52,88,8),(53,89,1),(54,89,5),(55,89,8),(56,89,10),(57,90,1),(58,91,1),(59,6,1),(60,8,1),(61,7,1),(62,7,3),(63,9,1),(64,10,1),(65,11,1),(66,43,1),(67,43,8),(68,20,1),(69,20,5),(70,20,8),(71,21,1),(72,21,5),(73,21,8),(74,22,1),(75,22,5),(76,22,8),(77,23,1),(78,23,5),(79,23,8),(80,24,1),(81,24,5),(82,24,8),(83,25,1),(84,25,5),(85,25,8),(86,26,1),(87,26,5),(88,26,8),(89,27,1),(90,27,5),(91,27,8),(92,28,1),(93,28,8),(94,35,1),(95,35,5),(96,35,8),(97,36,1),(98,36,3),(99,3,1),(100,3,3),(101,52,1),(102,52,7),(103,52,10),(104,4,1),(105,5,1),(106,37,1),(107,37,3),(108,41,1),(109,42,1),(110,49,12),(111,50,1),(112,51,1),(113,51,7),(114,51,8),(115,53,1),(116,53,5),(117,53,8),(118,54,1),(119,54,8),(120,56,1),(121,56,5),(122,56,8),(123,39,1),(124,40,1),(125,40,3),(126,29,1),(127,29,3),(128,29,8),(129,30,1),(130,30,8),(131,31,1),(132,31,8),(133,32,1),(134,32,8),(135,55,1),(136,55,5),(137,55,8),(138,44,1),(139,44,8),(140,45,1),(141,45,8),(142,58,1),(143,46,1),(144,59,1),(145,60,1),(146,60,5),(147,60,8),(148,62,1),(149,61,1),(150,61,5),(151,61,8),(152,63,1),(153,63,5),(154,57,1),(155,57,5),(156,57,8),(157,64,1),(158,64,5),(159,64,8),(160,65,1),(161,67,1),(162,73,1),(163,73,8),(164,65,8),(165,68,1),(166,69,1),(167,70,1),(168,71,1),(169,72,1),(170,72,5),(171,72,8),(172,74,1),(173,75,1),(174,47,1),(175,92,5),(176,2,1),(177,2,3),(178,48,1),(179,48,8),(182,76,1),(183,63,3);
/*!40000 ALTER TABLE `produitsallergenes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-11 14:16:26
