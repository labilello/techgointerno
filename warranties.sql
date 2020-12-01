-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-12-2020 a las 14:09:42
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `techgo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `warranties`
--

CREATE TABLE `warranties` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `devices` json NOT NULL DEFAULT (json_array()),
  `actions` json NOT NULL DEFAULT (json_array()),
  `documents` json NOT NULL DEFAULT (json_array()),
  `externalContact` json NOT NULL DEFAULT (json_array()),
  `internalLinks` json NOT NULL DEFAULT (json_array()),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `warranty_group_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `warranties`
--

INSERT INTO `warranties` (`id`, `name`, `devices`, `actions`, `documents`, `externalContact`, `internalLinks`, `created_at`, `updated_at`, `warranty_group_id`) VALUES
(1, 'Samsung', '[{\"origin\": \"Cualquier retail - Argentina - Uruguay - Paraguay\", \"deviceType\": \"Smartphone\"}, {\"origin\": \"Cualquier retail - Argentina - Uruguay - Paraguay\", \"deviceType\": \"Notebooks\"}, {\"origin\": \"Cualquier retail - Argentina - Uruguay - Paraguay\", \"deviceType\": \"Tablets\"}, {\"origin\": \"Cualquier retail - Argentina - Uruguay - Paraguay\", \"deviceType\": \"LED / LCD\"}]', '[{\"actionType\": \"No Recepcionables\", \"actionValue\": \"Indicar al cliente que debe comunicarse con el contact center para ser derivado a otro centro de servicio.\"}]', '[\"Factura de compra o print de pantalla firmado y sellado\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0800-555-7267\"}, {\"externalContactName\": \"En línea\", \"externalContactType\": \"Link\", \"externalContactValue\": \"https://www.samsung.com/ar/support/\"}, {\"externalContactName\": \"Soporte Remoto\", \"externalContactType\": \"Link\", \"externalContactValue\": \"https://www.samsung.com/ar/support/remoteservice/\"}]', '[{\"internalLinksType\": \"GSPN Mobile\", \"internalLinksValue\": \"http://mgspn6.samsungcsportal.com:9100/AnyWay/mobileGSPN.apk\"}, {\"internalLinksType\": \"GSPN\", \"internalLinksValue\": \"https://gspn6.samsungcsportal.com/index.jsp\"}, {\"internalLinksType\": \"Formulario Asistencia Comercial\", \"internalLinksValue\": \"https://form.jotformz.com/damrom/contact-support\"}]', '2020-10-23 18:41:44', '2020-10-23 18:41:44', 1),
(2, 'Apple', '[{\"origin\": \"Compumundo\", \"deviceType\": \"Smartphone\"}, {\"origin\": \"Compumundo\", \"deviceType\": \"Notebooks\"}, {\"origin\": \"Compumundo\", \"deviceType\": \"Tablets\"}]', '[{\"actionType\": \"No Recepcionables\", \"actionValue\": \"Indicar al cliente que debe comunicarse con el contact center para ser derivado a otro centro de servicio.\"}]', '[\"Factura de compra\"]', '[{\"externalContactName\": \"En línea\", \"externalContactType\": \"Link\", \"externalContactValue\": \"https://support.apple.com/es-es/contact\"}]', '[]', '2020-10-23 18:46:43', '2020-10-23 18:46:43', 1),
(3, 'Asus', '[{\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Smartphone\"}, {\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Notebooks\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Tablets\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"Enviar el equipo a Camacua.\"}]', '[\"Factura de compra o print de pantalla firmado y sellado\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0800-122-0563\"}, {\"externalContactName\": \"En línea\", \"externalContactType\": \"Link\", \"externalContactValue\": \"https://www.asus.com/support/Product/ContactUs/Services/questionform/?lang=es-ar\"}]', '[{\"internalLinksType\": \"Asus Lean eService\", \"internalLinksValue\": \"http://am.eservice.asus.com/ls-web/\"}]', '2020-10-23 18:48:59', '2020-10-23 18:48:59', 1),
(4, 'Audiologic', '[{\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Reproductores DVD\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Microcomponentes\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Parlantes\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"(REPRODUCTORES DVD) Enviar equipo a Camacua.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Generar nota de cambio en sucursal de origen.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(FUERA DE GARANTÍA) Ofrecer descuento para un equipo nuevo.\"}]', '[\"Factura de compra o print de pantalla firmado y sellado\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-444-8320\"}]', '[]', '2020-10-23 18:57:09', '2020-10-23 18:57:09', 1),
(5, 'BLU', '[{\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Smartphone\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Sucursales INTERIOR generar autorización de cambio; Sucursales AMBA enviar a Camacua.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(FUERA DE GARANTÍA) Ofrecer descuento para un equipo nuevo.\"}]', '[\"Factura de compra o print de pantalla firmado y sellado\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-444-8320\"}]', '[]', '2020-10-23 19:03:31', '2020-10-23 19:03:31', 1),
(6, 'Brother', '[{\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Impresoras\", \"inWarranty\": \"true\"}, {\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Máquinas de coser y  bordar\", \"inWarranty\": \"true\"}, {\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Scanners\", \"inWarranty\": \"true\"}, {\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Rotuladoras y Etiquetadoras\", \"inWarranty\": \"true\"}, {\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"ScanNcut\", \"inWarranty\": \"true\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Enviar el equipo a Camacua.\"}, {\"actionType\": \"No Recepcionables\", \"actionValue\": \"Indicar al cliente que debe comunicarse con el contact center para ser derivado a otro centro de servicio.\"}]', '[\"Factura de compra o print de pantalla firmado y sellado\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-222-7684\"}]', '[{\"internalLinksType\": \"Portal de Agentes\", \"internalLinksValue\": \"https://brotherargentina.force.com/cas/login\"}]', '2020-10-23 19:06:15', '2020-10-23 19:06:15', 1),
(7, 'Commodore', '[{\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Computadoras\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Notebooks\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Generar autorización de cambio de equipo en retail de compra.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(FUERA DE GARANTÍA) Ofrecer descuento para un equipo nuevo.\"}]', '[\"Factura de compra o print de pantalla firmado y sellado\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-444-8320\"}]', '[]', '2020-10-23 19:08:04', '2020-10-23 19:08:04', 1),
(8, 'Coventry', '[{\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Purificadores\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Cavas de vinos\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Lavavajillas\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Jarras Termica\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Tostadoras\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Cafeteras\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Aire acondicionados\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"(AMBA) Derivar al cliente al contact center para pactar una visita.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(INTERIOR) Pactar una visita para una inspeccion del producto.\"}]', '[\"Factura de compra\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-444-8320\"}]', '[]', '2020-11-24 16:48:46', '2020-11-24 16:48:46', 1),
(9, 'Datsun', '[{\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Smartphones\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Generar autorización de cambio de equipo en retail de compra.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(FUERA DE GARANTÍA) Ofrecer descuento para un equipo nuevo.\"}]', '[\"Factura de compra\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-444-8320\"}]', '[]', '2020-11-24 16:50:31', '2020-11-24 16:50:31', 1),
(10, 'Exo', '[{\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Smartphone\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Cualquier retail\", \"deviceType\": \"Notebooks\"}, {\"origin\": \"Cualquier retail\", \"deviceType\": \"Tablets\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Enviar el equipo a Camacua.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(FUERA DE GARANTÍA) Enviar el equipo a Camacua.\"}, {\"actionType\": \"No Recepcionables\", \"actionValue\": \"Indicar al cliente que debe comunicarse con el contact center para ser derivado a otro centro de servicio.\"}]', '[\"Factura de compra\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-122-2396\"}, {\"externalContactName\": \"En línea\", \"externalContactType\": \"Link\", \"externalContactValue\": \"https://www.exo.com.ar/contacto\"}]', '[]', '2020-11-24 16:52:56', '2020-11-24 16:52:56', 1),
(11, 'Fitpower', '[{\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Caminadoras\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Bicicletas Fijas\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Compumundo - Garbarino\", \"deviceType\": \"Cinta\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"(AMBA) Derivar al cliente al contact center para pactar una visita.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(INTERIOR) Pactar una visita para una inspeccion del producto.\"}]', '[\"Factura de compra\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-444-8320\"}]', '[]', '2020-11-24 16:54:29', '2020-11-24 16:54:29', 1),
(12, 'Hyundai', '[{\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Smartphone\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"Recepción del equipo en Solnik.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Enviar el equipo a Camacua.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(FUERA DE GARANTÍA) Enviar el equipo a Camacua.\"}]', '[\"Número de orden de terceros\", \"Factura de compra\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-810-6000\"}, {\"externalContactName\": \"En línea\", \"externalContactType\": \"Link\", \"externalContactValue\": \"https://www.nokia.com/phones/es_ar/support\"}]', '[{\"internalLinksType\": \"Portal de Agentes - Solnik\", \"internalLinksValue\": \"http://portalagentes.solnik.com.ar/\"}]', '2020-11-24 16:56:33', '2020-11-24 16:56:33', 1),
(13, 'LG', '[{\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Smartphone\"}, {\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Notebooks\"}, {\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Tablets\"}]', '[{\"actionType\": \"No Recepcionables\", \"actionValue\": \"Indicar al cliente que debe comunicarse con el contact center para ser derivado a otro centro de servicio.\"}]', '[\"Factura de compra\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0800-888-5454\"}, {\"externalContactName\": \"Whatsapp\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"11-3015-8095\"}, {\"externalContactName\": \"En línea\", \"externalContactType\": \"Link\", \"externalContactValue\": \"https://www.lg.com/ar/soporte/chat-email\"}]', '[]', '2020-11-24 16:58:32', '2020-11-24 16:58:32', 1),
(14, 'Nintendo', '[{\"origin\": \"Distribuidor Autorizado - VER DRIVE\", \"deviceType\": \"Nintendo Switch\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}, {\"origin\": \"Distribuidor Autorizado - VER DRIVE\", \"deviceType\": \"Gamepad Joycon L / R (Accesorio)\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"Verificar que no posea control parental activo. En caso de tenerlo y no recordar la contraseña, es un caso fuera de garntía que se resuelve en sucursal.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"Verificar el origen del producto. Este debe figurar en la lista de distribuidores autorizados.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Enviar el equipo a Camacua.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(FUERA DE GARANTÍA) Enviar el equipo a Camacua.\"}, {\"actionType\": \"No Recepcionables\", \"actionValue\": \"Indicar al cliente que debe comunicarse con el contact center para ser derivado a otro centro de servicio.\"}]', '[\"Factura de compra\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-444-8320\"}]', '[{\"internalLinksType\": \"Lista de Distribuidores\", \"internalLinksValue\": \"#\"}]', '2020-11-24 17:04:56', '2020-11-24 17:04:56', 1),
(15, 'Nokia', '[{\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Smartphone\", \"inWarranty\": \"true\", \"outWarranty\": \"true\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"Recepción del equipo en Solnik.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Enviar el equipo a Camacua.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(FUERA DE GARANTÍA) Enviar el equipo a Camacua.\"}]', '[\"Número de orden de terceros\", \"Factura de compra\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-810-6000\"}, {\"externalContactName\": \"En línea\", \"externalContactType\": \"Link\", \"externalContactValue\": \"https://www.nokia.com/phones/es_ar/support\"}]', '[{\"internalLinksType\": \"Portal de Agentes - Solnik\", \"internalLinksValue\": \"http://portalagentes.solnik.com.ar/\"}]', '2020-11-24 17:07:05', '2020-11-24 17:07:05', 1),
(16, 'Roku', '[{\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Roku Express+\", \"inWarranty\": \"true\"}, {\"origin\": \"Cualquier retail - Argentina\", \"deviceType\": \"Roku Stick+\", \"inWarranty\": \"true\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Realizar cambio del producto en sucursal y enviar el equipo dañaro a SupplyChain (service).\"}, {\"actionType\": \"No Recepcionables\", \"actionValue\": \"Indicar al cliente que debe comunicarse con el contact center para ser derivado a otro centro de servicio.\"}]', '[]', '[]', '[]', '2020-11-24 17:09:28', '2020-11-24 17:09:28', 1),
(17, 'TWG', '[{\"origin\": \"Cualquier retail derivado por TWG - Argentina\", \"deviceType\": \"Commodore\", \"inWarranty\": \"true\"}, {\"origin\": \"Cualquier retail derivado por TWG - Argentina\", \"deviceType\": \"Asus\", \"inWarranty\": \"true\"}, {\"origin\": \"Cualquier retail derivado por TWG - Argentina\", \"deviceType\": \"Nokia\", \"inWarranty\": \"true\"}, {\"origin\": \"Cualquier retail derivado por TWG - Argentina\", \"deviceType\": \"Samsung\"}]', '[{\"actionType\": \"Recepcionables\", \"actionValue\": \"Verificar periodo de garantía en póliza de seguro.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"Recepcionar el equipo en sistema TWG.\"}, {\"actionType\": \"Recepcionables\", \"actionValue\": \"(GARANTÍA) Enviar el equipo a Camacua.\"}, {\"actionType\": \"No Recepcionables\", \"actionValue\": \"Indicar al cliente que debe comunicarse con el contact center para ser derivado a otro centro de servicio.\"}]', '[\"Número de orden de terceros\", \"Póliza de seguro\", \"Factura de compra\"]', '[{\"externalContactName\": \"Contact center\", \"externalContactType\": \"Telefono\", \"externalContactValue\": \"0810-666-4272\"}]', '[{\"internalLinksType\": \"Portal de agentes\", \"internalLinksValue\": \"http://twg.ciberbrain.net/\"}]', '2020-11-24 17:13:10', '2020-11-24 17:13:10', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `warranties`
--
ALTER TABLE `warranties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `warranties_name_unique` (`name`),
  ADD KEY `warranties_warranty_group_id_foreign` (`warranty_group_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `warranties`
--
ALTER TABLE `warranties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `warranties`
--
ALTER TABLE `warranties`
  ADD CONSTRAINT `warranties_warranty_group_id_foreign` FOREIGN KEY (`warranty_group_id`) REFERENCES `warranty_groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
