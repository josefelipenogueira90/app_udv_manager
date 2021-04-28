/*
MySQL Backup
Source Server Version: 5.5.5
Source Database: gudvdb
Date: 27/04/2021 23:33:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `cargos`
-- ----------------------------
DROP TABLE IF EXISTS `cargos`;
CREATE TABLE `cargos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_depart` bigint(20) unsigned NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salario_base` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cargos_id_depart_foreign` (`id_depart`),
  CONSTRAINT `cargos_id_depart_foreign` FOREIGN KEY (`id_depart`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `departamentos`
-- ----------------------------
DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE `departamentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `dep_telefo`
-- ----------------------------
DROP TABLE IF EXISTS `dep_telefo`;
CREATE TABLE `dep_telefo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_depart` bigint(20) unsigned NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dep_telefo_id_depart_foreign` (`id_depart`),
  CONSTRAINT `dep_telefo_id_depart_foreign` FOREIGN KEY (`id_depart`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `funcionarios`
-- ----------------------------
DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE `funcionarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `data_nascimento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sexo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salario` double(10,2) NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `funcionarios_id_user_foreign` (`id_user`),
  CONSTRAINT `funcionarios_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `func_endere`
-- ----------------------------
DROP TABLE IF EXISTS `func_endere`;
CREATE TABLE `func_endere` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `logradouro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `func_endere_id_user_foreign` (`id_user`),
  CONSTRAINT `func_endere_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `funcionarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `func_telefo`
-- ----------------------------
DROP TABLE IF EXISTS `func_telefo`;
CREATE TABLE `func_telefo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `func_telefo_id_user_foreign` (`id_user`),
  CONSTRAINT `func_telefo_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `funcionarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfilAcesso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `cargos` VALUES ('1','5','Analista de Sistemas','3500.00');
INSERT INTO `departamentos` VALUES ('1','Contabiliade'), ('2','Direito'), ('3','Recursos Humanos'), ('4','Diretoria'), ('5','Tecnologia da Informação');
INSERT INTO `dep_telefo` VALUES ('1','1','6199254815'), ('2','1','6199254848'), ('3','1','6199254816'), ('4','2','6185481526'), ('5','2','6185481616');
INSERT INTO `funcionarios` VALUES ('1','2','2021-04-27 22:36:50','M','13800.32','Analista de Sistemas','Master','Ativo'), ('2','1','2021-04-27 22:36:53','M','3200.25','Analista de Sistemas','Júnior','Ativo'), ('3','3','2021-04-27 22:36:56','F','12540.65','Gerente','Sênior','Ativo');
INSERT INTO `func_endere` VALUES ('1','1','Rua jó 312','canaã','Ipatinga','MG','Brasil','35164176'), ('2','2','Rua Tancredo Neves, 815','Pedras Ricas','Açuaçui','SP','Brasil','95457815'), ('3','3','Rua 31','Vila dos Tecnicos','Timóteo','MG','Brasil','34160178');
INSERT INTO `func_telefo` VALUES ('1','1','3199151965');
INSERT INTO `migrations` VALUES ('1','2019_08_19_000000_create_failed_jobs_table','1'), ('2','2021_04_27_182643_create_departamento_models_table','1'), ('3','2021_04_27_182721_create_dep_telefo_models_table','1'), ('4','2021_04_27_182748_create_usuario_models_table','1'), ('5','2021_04_27_182812_create_cargo_models_table','1'), ('6','2021_04_27_182841_create_funcionario_models_table','1'), ('7','2021_04_27_182904_create_func_endere_models_table','1'), ('8','2021_04_27_182920_create_func_telefo_models_table','1');
INSERT INTO `usuarios` VALUES ('1','Felipe nogueira','felipenogueira@gmail.com','Administrador','mundo2021'), ('2','Pedro','pedro@gmail.com','Supervisor','mundo2021'), ('3','Administrador','adm@teste.com','Administrador','mundo2021'), ('4','Supervisor','super@teste.com','Supervisor','mundo2021'), ('5','Funcionário','func@teste.com','Funcionário','mundo2021'), ('6','Amanda','amanda@gmail.com','Funcionário','mundo2021'), ('7','Camila','camila@teste.com','Funcionároo','mundo2021'), ('8','Carlos','carlos@teste.com','Funcionário','mundo2021'), ('10','João','josao@teste.com','Funcionário','mundo2021');
